<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClassPrices;
use App\Models\ServicesCategories;
use App\Models\Locations;
use App\Models\Service;
use App\Models\Durations;
use App\Models\OptionsServicesDurations;
use App\Models\ServiceCategoriesPivot;
use App\Models\ClassTimes;
use App\Models\Employee;
use App\Models\ServiceEmployees;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    static $name = 'services';
    
    static $duration_list = [15, 35, 55, 65, 75];
    static $icons_path = 'images/service-icons/';
    static $static_icons = ['aromatherapy', 'aromatic-candle', 'bath', 'body-scrub', 'breasts', 'candle', 'cupping', 'diffuser', 'eyebrow', 'eye-mask', 'face-mask', 'face-treatment', 'fish-spa', 'foot-massage', 'foot-spa', 'hairdresser', 'hot-stones', 'jaw', 'lashes', 'head-massage', 'roll-massage', 'back-massage', 'onsen', 'reed-difusser', 'slippers', 'spa-and-relax', 'tea', 'waxing'];

    public function __construct()
    {
        view()->composer("admin.".self::$name.".*", function ($view) {
            $data['duration_list'] = self::$duration_list;
            $data['icons_path'] = self::$icons_path;
            $data['static_icons'] = self::$static_icons;
            $data['locations'] = Locations::where('status', 1)->get();
            $view->with($data);
        });
    }

    public function index(Request $request)
    {
        $routeName = Route::currentRouteName();
        if ($request->has('reset') and request('reset') == 'true') {
            return redirect()->route($routeName);
        }

        $items = Service::orderBy('id', 'desc')->get();
        return view("admin." . self::$name . ".home", [
            'items' => $items,
        ]);
    }

    public function destroy($id)
    {
        Service::query()->findOrFail($id)->delete();
        OptionsServicesDurations::where('type', 'services')->where('pivot_id', $id)->delete();
        ServiceCategoriesPivot::where('service_id', $id)->delete();
        ClassTimes::where('service_id', $id)->delete();
        ClassPrices::where('service_id', $id)->delete();

        return 'success';
    }

    public function create()
    {
        $categories = ServicesCategories::all();
        $durations = Durations::where('for', 'services')->get();
        $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $employees = Employee::orderBy('id', 'desc')->get();

        return view("admin." . self::$name . ".create", compact('categories', 'durations', 'weekdays', 'employees'));
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
            'description' => 'required|string',
            'location_id' => 'required|exists:locations,id',
            'categories' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['title', 'description', 'price', 'bundle_price', 'local_price', 'image', 'location_id', 'duration', 'status', 'lead_time']);

        $data['status'] = $request->has('status') ? 1 : 0;

        $table = Service::create($data);
        $id = $table->id;

        $table->slug = Str::slug($table->title);
        $table->max_customers = request('max_customers');

        $table->is_class = 0;

        if ($request->has('is_class'))
            $table->is_class = 1; 
        
        $durations = $request->input('item_durations.duration_id', []);
        $prices = $request->input('item_durations.price', []);
        $bundle_prices = $request->input('item_durations.bundle_price', []);
        $local_prices = $request->input('item_durations.local_price', []);

        if (count($durations) > 0 AND $durations[0] != Null) {
            for ($i = 0; $i < count($durations); $i++) {
                $option_duration = new OptionsServicesDurations();
                $option_duration->pivot_id = $id;
                $option_duration->type = 'services';
                $option_duration->duration_id = $durations[$i];
                $option_duration->price = $prices[$i];
                $option_duration->bundle_price = $bundle_prices[$i];
                $option_duration->local_price = $local_prices[$i];
                $option_duration->save();
            }
        }

        if ($request->has('categories') && count($request->input('categories', [])) > 0)
        {
            foreach ($request->categories as $category_id)
            {
                $category = new ServiceCategoriesPivot();
                $category->service_id = $table->id;
                $category->category_id = $category_id;
                $category->save();
            }
        }

        $weekdays = $request->input('class_times.weekday', []);
        $fromTime = $request->input('class_times.fromTime', []);
        $toTime = $request->input('class_times.toTime', []);

        if (count($weekdays) > 0 AND $weekdays[0] != Null) {
            for ($i = 0; $i < count($weekdays); $i++) {
                $option_duration = new ClassTimes();
                $option_duration->service_id = $id;
                $option_duration->weekday = $weekdays[$i];
                $option_duration->fromTime = $fromTime[$i];
                $option_duration->toTime = $toTime[$i];
                $option_duration->save();
            }
        }

        $sessions = $request->input('class_prices.sessions', []);
        $prices = $request->input('class_prices.price', []);

        if (count($sessions) > 0 AND $sessions[0] != Null) {
            for ($i = 0; $i < count($sessions); $i++) {
                $option_prices = new ClassPrices();
                $option_prices->service_id = $id;
                $option_prices->sessions = $sessions[$i];
                $option_prices->price = $prices[$i];
                $option_prices->save();
            }
        }

        ServiceEmployees::where('service_id', $id)->delete();
        $employees = $request->input('employees');
        if (is_array($employees) AND count($employees) > 0) {
            foreach($employees as $employee) {
                $employee_table = new ServiceEmployees();
                $employee_table->service_id = $id;
                $employee_table->employee_id = $employee;
                $employee_table->save();
            }
        }

        $table->save();

        return redirect()->route('admin.'.self::$name.'.index')->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $data['item'] = Service::findOrFail($id);
        $data['categories'] = ServicesCategories::all();
        $data['durations'] = Durations::where('for', 'services')->get();
        $data['weekdays'] = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $data['employees'] = Employee::orderBy('id', 'desc')->get();

        return view('admin.' . self::$name . '.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'description' => 'required|string',
            'location_id' => 'required|exists:locations,id',
            'categories' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['title', 'description', 'price', 'bundle_price', 'local_price', 'image', 'location_id', 'duration', 'status', 'lead_time']);

        $data['status'] = $request->has('status') ? 1 : 0;

        Service::findOrFail($id)->update($data);

        $table = Service::query()->findOrFail($id);

        $table->max_customers = request('max_customers');
        $table->slug = Str::slug($table->title);

        $table->is_class = 0;

        if ($request->has('is_class'))
            $table->is_class = 1; 
        
        OptionsServicesDurations::where('pivot_id', $id)->where('type', 'services')->delete();

        $durations = $request->input('item_durations.duration_id', []);
        $prices = $request->input('item_durations.price', []);
        $bundle_prices = $request->input('item_durations.bundle_price', []);
        $local_prices = $request->input('item_durations.local_price', []);

        if (count($durations) > 0 AND $durations[0] != Null) {
            for ($i = 0; $i < count($durations); $i++) {
                $option_duration = new OptionsServicesDurations();
                $option_duration->pivot_id = $id;
                $option_duration->type = 'services';
                $option_duration->duration_id = $durations[$i];
                $option_duration->price = $prices[$i];
                $option_duration->bundle_price = $bundle_prices[$i];
                $option_duration->local_price = $local_prices[$i];
                $option_duration->save();
            }
        }

        ServiceCategoriesPivot::where('service_id', $id)->delete();

        if ($request->has('categories') && count($request->input('categories', [])) > 0)
        {
            foreach ($request->categories as $category_id)
            {
                $category = new ServiceCategoriesPivot();
                $category->service_id = $table->id;
                $category->category_id = $category_id;
                $category->save();
            }
        }

        ClassTimes::where('service_id', $id)->delete();

        $weekdays = $request->input('class_times.weekday', []);
        $fromTime = $request->input('class_times.fromTime', []);
        $toTime = $request->input('class_times.toTime', []);

        if (count($weekdays) > 0 AND $weekdays[0] != Null) {
            for ($i = 0; $i < count($weekdays); $i++) {
                $option_duration = new ClassTimes();
                $option_duration->service_id = $id;
                $option_duration->weekday = $weekdays[$i];
                $option_duration->fromTime = $fromTime[$i];
                $option_duration->toTime = $toTime[$i];
                $option_duration->save();
            }
        }

        
        ClassPrices::where('service_id', $id)->delete();

        $sessions = $request->input('class_prices.sessions', []);
        $prices = $request->input('class_prices.price', []);

        if (count($sessions) > 0 AND $sessions[0] != Null) {
            for ($i = 0; $i < count($sessions); $i++) {
                $option_prices = new ClassPrices();
                $option_prices->service_id = $id;
                $option_prices->sessions = $sessions[$i];
                $option_prices->price = $prices[$i];
                $option_prices->save();
            }
        }

        ServiceEmployees::where('service_id', $id)->delete();
        $employees = $request->input('employees');
        if (is_array($employees) AND count($employees) > 0) {
            foreach($employees as $employee) {
                $employee_table = new ServiceEmployees();
                $employee_table->service_id = $id;
                $employee_table->employee_id = $employee;
                $employee_table->save();
            }
        }

        $table->save();

        return redirect()->back()->with('status', __('common.update'));
    }
}
