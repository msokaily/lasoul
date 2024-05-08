<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Service;
use App\Models\Booking as TableName;
use App\Models\Events;
use App\Http\Services\bookings\Create as CreateOrderService;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

class BookingsController extends Controller
{
    static $name = 'bookings';

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $routeName = Route::currentRouteName();
        if ($request->has('reset') and request('reset') == 'true') {
            return redirect()->route($routeName);
        }

        $items = TableName::orderBy('id', 'desc')->get();
        return view("admin." . self::$name . ".home", [
            'items' => $items,
        ]);
    }

    public function show($id)
    {
        $data['item'] = TableName::findOrFail($id);
        $data['accommodations'] = Accommodation::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        return view('admin.' . self::$name . '.show', $data);
    }

    public function destroy($id)
    {
        TableName::query()->findOrFail($id)->delete();
        return 'success';
    }

    public function create()
    {
        $data['accommodations'] = Accommodation::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['events'] = Events::where('status', 1)->get();
        $data['users'] = User::where('role', 'User')->get(['id', 'first_name', 'last_name']);
        return view("admin." . self::$name . ".create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_type' => 'required|string|max:191',
            'customer_type' => 'required|string|max:191',
            'cart_items' => 'required|array'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['payment_type', 'customer_type', 'cart_items']);

        $data['currency'] = settings('currency');

        $data['status'] = 'Confirmed';
        if ($request->input('status') == 'paid') {
            $data['paid_at'] = Carbon::now();
        }
        if (!$request->input('created_at')) {
            $data['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        }

        if ($request->input('user_id') == -1) {
            $data['user_id'] = -1;
            $data['guest_info'] = $request->only(['first_name', 'last_name', 'address', 'city', 'postal_code']);
        } else {
            $data['user_id'] = $request->input('user_id');
            $data['guest_info'] = null;
        }

        $newOrder = (new CreateOrderService($data))->create();
        
        if ($newOrder) {
            return response()->json([
                'status' => true,
                'message' => __('common.create'),
                'redirect' => route('admin.' . self::$name . '.index')
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => __('common.add_fail')
            ]);
        }

    }

    public function edit($id)
    {
        $data['order'] = TableName::with('products')->findOrFail($id);
        $data['accommodations'] = Accommodation::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['events'] = Events::where('status', 1)->get();
        $data['users'] = User::where('role', 'User')->get(['id', 'first_name', 'last_name']);
        return view('admin.' . self::$name . '.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['payment_type', 'customer_type', 'cart_items']);

        $data['currency'] = settings('currency');

        $data['status'] = 'Confirmed';
        if ($request->input('payment_status') == 'paid') {
            $data['paid_at'] = Carbon::now();
        } else {
            $data['paid_at'] = null;
        }
        if (!$request->input('created_at')) {
            $data['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        }

        $total = 0;
        $data['price_type'] = $data['customer_type'];
        $price_field = $data['customer_type'] == 'standard' ? '' : $data['customer_type'] . '_';
        foreach ($data['cart_items'] as $cart_type => $cart) {
            foreach ($cart as $item) {
                $days = (Carbon::parse($item['end_date'])->diffInDays(Carbon::parse($item['start_date'])) + 1);
                if ($cart_type == 'accommodations') {
                    $total += $item['item'][$price_field . 'price'] * $days;
                    if ($item['options']) {
                        foreach ($item['options'] as $opt) {
                            if ($opt['duration']) {
                                $total += $opt['duration'][$price_field . 'price'];
                            } else {
                                $total += $opt['option'][$price_field . 'price'] * $days;
                            }
                        }
                    }
                }
            }
        }

        $data['total_price'] = $total;

        if ($request->input('user_id') == -1) {
            $data['user_id'] = -1;
            $data['guest_info'] = $request->only(['first_name', 'last_name', 'address', 'city', 'postal_code']);
        } else {
            $data['user_id'] = $request->input('user_id');
            $data['guest_info'] = null;
        }

        $newOrder = TableName::findOrFail($id);
        $newOrder->update($data);

        if ($newOrder) {
            foreach ($newOrder->products as $prod) {
                try {
                    $prod->options->forceDelete();
                } catch (\Throwable $th) {
                    $prod->options()->forceDelete();
                }
            }
            try {
                $newOrder->products->forceDelete();
            } catch (\Throwable $th) {
                $newOrder->products()->forceDelete();
            }
            foreach ($data['cart_items'] as $cart_type => $cart) {
                foreach ($cart as $item) {
                    if ($cart_type == 'accommodations') {
                        $newOrderProduct = $newOrder->products()->create([
                            'entity_id' => $item['item']['id'],
                            'start_date' => $item['start_date'],
                            'end_date' => $item['end_date'],
                            'arrival_time' => 0,
                            'price' => $item['item'][$price_field . 'price'],
                            'adults' => $item['adults'],
                            'kids' => $item['kids']
                        ]);
                        if ($newOrderProduct) {
                            $optionsPrice = 0;
                            if ($item['options']) {
                                foreach ($item['options'] as $opt) {
                                    if ($opt['duration']) {
                                        $optionsPrice = $opt['duration'][$price_field . 'price'];
                                    } else {
                                        $optionsPrice = $opt['option'][$price_field . 'price'];
                                    }
                                    $newOrderProduct->options()->create([
                                        'option_id' => $opt['option']['id'],
                                        'option_duration_id' => isset($opt['duration']) ? $opt['duration']['id'] : null,
                                        'price' => $optionsPrice
                                    ]);
                                }
                            }
                        }
                    }
                }
            }
            return response()->json([
                'status' => true,
                'message' => __('common.update'),
                'redirect' => route("admin.".self::$name.".index")
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => __('common.add_fail')
            ]);
        }
    }
}
