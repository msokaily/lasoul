<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Durations;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


class DurationsController extends Controller
{
    static $name = 'durations';

    public function index(Request $request)
    {
        $items = Durations::query();

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
        Durations::query()->findOrFail($id)->delete();

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
            'for' => 'required',
            'duration_type' => 'required',
            'value' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = new Durations();
        $table->for = request('for');
        $table->duration_type = request('duration_type');
        $table->value = request('value');
        $table->save();

        $inputData = request()->except('value');
        $inputData['value'] = '';
        return redirect()->back()->with('status', __('common.create'))->withInput($inputData);
    }

    public function edit($id)
    {
        $item = Durations::findOrFail($id);

        return view("admin.".self::$name.".edit", compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'for' => 'required',
            'duration_type' => 'required',
            'value' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = Durations::query()->findOrFail($id);
        $table->for = request('for');
        $table->duration_type = request('duration_type');
        $table->value = request('value');
        $table->save();

        return redirect()->back()->with('status', __('common.update'));
    }

}

