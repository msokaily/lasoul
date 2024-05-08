<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OptionsServicesDurations;
use App\Models\Durations;
use App\Models\Options;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


class OptionsController extends Controller
{
    static $name = 'options';

    public function index(Request $request)
    {
        $items = Options::query();

        $routeName = Route::currentRouteName();
        if($request->has('reset') AND request('reset') == 'true'){
            return redirect()->route($routeName);
        }
        
        $items = $items->orderBy('id', 'desc')->get();

        return view("admin.".self::$name.".home", [
            'items' => $items,
        ]);

    }

    public function destroy($id)
    {
        Options::query()->findOrFail($id)->delete();
        OptionsServicesDurations::where('type', 'options')->where('pivot_id', $id)->delete();
        return 'success';
    }

    public function create(Request $request)
    {
        $durations = Durations::where('for', 'options')->get();

        return view("admin.".self::$name.".create", compact('durations'));
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
            'title' => 'required|string|max:191',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = new Options();
        $table->title = request('title');
        $table->price = request('price');
        $table->bundle_price = request('bundle_price');
        $table->local_price = request('local_price');
        $table->description = request('description');

        $table->is_quantity = 0;
        $table->is_durations = 0;

        if ($request->has('is_quantity')){
            $table->is_quantity = 1; 
            $table->quantity = request('quantity');
        }
        
        if ($request->has('is_durations'))
            $table->is_durations = 1; 
         
        $table->image = $request->image;

        $table->save();

        $durations = $request->input('item_durations.duration_id', []);
        $prices = $request->input('item_durations.price', []);
        $bundle_prices = $request->input('item_durations.bundle_price', []);
        $local_prices = $request->input('item_durations.local_price', []);

        if (count($durations) > 0 AND $durations[0] != Null) {
            for ($i = 0; $i < count($durations); $i++) {
                $option_duration = new OptionsServicesDurations();
                $option_duration->pivot_id = $table->id;
                $option_duration->type = 'options';
                $option_duration->duration_id = $durations[$i];
                $option_duration->price = $prices[$i];
                $option_duration->bundle_price = $bundle_prices[$i];
                $option_duration->local_price = $local_prices[$i];
                $option_duration->save();
            }
        }

        return redirect()->back()->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $item = Options::findOrFail($id);
        $durations = Durations::where('for', 'options')->get();

        return view("admin.".self::$name.".edit", compact('item', 'durations'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = Options::query()->findOrFail($id);
        $table->title = request('title');
        $table->price = request('price');
        $table->bundle_price = request('bundle_price');
        $table->local_price = request('local_price');
        $table->description = request('description');

        $table->is_quantity = 0;
        $table->is_durations = 0;

        if ($request->has('is_quantity')){
            $table->is_quantity = 1; 
            $table->quantity = request('quantity');
        }
        
        if ($request->has('is_durations'))
            $table->is_durations = 1; 
         
        $table->image = $request->image;

        $table->save();

        OptionsServicesDurations::where('pivot_id', $table->id)->where('type', 'options')->delete();

        $durations = $request->input('item_durations.duration_id', []);
        $prices = $request->input('item_durations.price', []);
        $bundle_prices = $request->input('item_durations.bundle_price', []);
        $local_prices = $request->input('item_durations.local_price', []);

        if (count($durations) > 0 AND $durations[0] != Null) {
            for ($i = 0; $i < count($durations); $i++) {
                $option_duration = new OptionsServicesDurations();
                $option_duration->pivot_id = $table->id;
                $option_duration->type = 'options';
                $option_duration->duration_id = $durations[$i];
                $option_duration->price = $prices[$i];
                $option_duration->bundle_price = $bundle_prices[$i];
                $option_duration->local_price = $local_prices[$i];
                $option_duration->save();
            }
        }

        return redirect()->back()->with('status', __('common.update'));
    }

}

