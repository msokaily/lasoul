<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Employee as TableName;
use App\Models\WorkingTimes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

class EmployeesController extends Controller
{
    static $name = 'employees';
    
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

    public function destroy($id)
    {
        TableName::query()->findOrFail($id)->delete();
        return 'success';
    }

    public function create()
    {
        $data['services'] = Service::where('status', 1)->get();
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
            'name' => 'required|string|max:191',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['name', 'description', 'image', 'status']);

        $data['status'] = $request->has('status') ? 1 : 0;

        $item = TableName::create($data);

        $emp_services_ids = [];
        if ($item->services) {
            $emp_services_ids = $item->services->pluck('service_id')->toArray();
        }
        $new_services = $request->input('services', []);
        if ($new_services) {
            $newIds = [];
            foreach ($new_services as $key => $service_id) {
                if (!in_array((int)$service_id, $emp_services_ids)) {
                    $newIds[] = (int)$item->services()->create(['service_id' => $service_id])->service_id;
                }else {
                    $newIds[] = (int)$service_id;
                }
            }
            if (count($newIds) > 0) {
                $item->services()->whereNotIn('service_id', $newIds)->delete();
            }
        }

        $this->update_working_times($item->id);

        return redirect()->route('admin.'.self::$name.'.index')->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $data['item'] = TableName::findOrFail($id);
        $data['services'] = Service::where('status', 1)->get();
        return view('admin.' . self::$name . '.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'description' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['name', 'description', 'image', 'status']);

        $data['status'] = $request->has('status') ? 1 : 0;

        $item = TableName::findOrFail($id);
        $item->update($data);
        $emp_services_ids = [];
        if ($item->services) {
            $emp_services_ids = $item->services->pluck('service_id')->toArray();
        }
        $new_services = $request->input('services', []);
        if ($new_services) {
            $newIds = [];
            foreach ($new_services as $key => $service_id) {
                if (!in_array((int)$service_id, $emp_services_ids)) {
                    $newIds[] = (int)$item->services()->create(['service_id' => $service_id])->service_id;
                }else {
                    $newIds[] = (int)$service_id;
                }
            }
            if (count($newIds) > 0) {
                $item->services()->whereNotIn('service_id', $newIds)->delete();
            }
        }

        $this->update_working_times($id);

        return redirect()->back()->with('status', __('common.update'));
    }

    public function update_working_times($employee_id)
    {
        $times = request('times');
        if ($times) {
            try {
                $times = (array)json_decode($times);
            } catch (\Throwable $th) {
                throw $th;
                return;
            }
        }else {
            return;
        }
        WorkingTimes::where('employee_id', $employee_id)->delete();
        if(is_array($times) AND count($times) > 0){
            foreach($times as $day => $time){
                if(count($time) > 0){
                    foreach($time as $single_time){
                        $working_times = new WorkingTimes();
                        $working_times->day = $day;
                        $working_times->employee_id = $employee_id;
                        $working_times->hour_from = $single_time[0];
                        $working_times->hour_to = $single_time[1];
                        $working_times->save();
                    }
                }
            }
        }

        return 'success';
    }
}
