<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventTypes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


class EventTypesController extends Controller
{
    static $name = 'event_types';

    public function index(Request $request)
    {
        $items = EventTypes::query();

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
        EventTypes::query()->findOrFail($id)->delete();

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
            'title' => 'required|string|max:191'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = new EventTypes();
        $table->title = request('title');
        $table->save();
        
        return redirect()->back()->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $item = EventTypes::findOrFail($id);

        return view("admin.".self::$name.".edit", compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = EventTypes::query()->findOrFail($id);
        $table->title = request('title');
        $table->save();

        return redirect()->back()->with('status', __('common.update'));
    }

}

