<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\EventTypes;
use App\Models\Locations;
use App\Models\Media;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


class EventsController extends Controller
{
    static $name = 'events';

    public function __construct()
    {
        view()->composer("admin.".self::$name.".*", function ($view) {
            $data['locations'] = Locations::where('status', 1)->get();
            $data['event_types'] = EventTypes::all();
            $view->with($data);
        });
    }

    public function index(Request $request)
    {
        $routeName = Route::currentRouteName();
        if($request->has('reset') AND request('reset') == 'true'){
            return redirect()->route($routeName);
        }

        if ($request->input('type')) {
            $items = Events::where('type_id', $request->input('type'));
        } else {
            $items = Events::query();
        }
        
        $items = $items->orderBy('id', 'desc')->get();

        return view("admin.".self::$name.".home", [
            'items' => $items,
        ]);

    }

    public function destroy($id)
    {
        Events::findOrFail($id)->delete();
        return 'success';
    }

    public function create(Request $request)
    {
        return view("admin.".self::$name.".create");
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
            'description' => 'required',
            'location_id' => 'required',
            'price' => 'required|min:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after_or_equal:start_at',
            'type_id' => 'required|exists:event_types,id',
            'limit' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = $request->all();

        $data['status'] = 0;
        if ($request->has('status')) {
            $data['status'] = 1;
        }

        Events::create($data);
        
        return redirect()->route('admin.'.self::$name.'.index')->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $data['item'] = Events::findOrFail($id);

        return view("admin.".self::$name.".edit", $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'description' => 'required',
            'location_id' => 'required',
            'price' => 'required|min:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after_or_equal:start_at',
            'type_id' => 'required|exists:event_types,id',
            'limit' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();

        $data['status'] = 0;
        if ($request->has('status')) {
            $data['status'] = 1;
        }

        Events::findOrFail($id)->update($data);

        return redirect()->back()->with('status', __('common.update'));
    }

}

