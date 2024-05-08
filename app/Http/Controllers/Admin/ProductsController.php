<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product as TableName;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;


class ProductsController extends Controller
{
    static $name = 'products';

    public function index(Request $request)
    {
        $items = TableName::query();

        $routeName = Route::currentRouteName();
        if($request->has('reset') AND request('reset') == 'true'){
            return redirect()->route($routeName);
        }
        
        $items = $items->orderBy('sort', 'asc');
        $cat_id = request('cat');
        $cat = null;
        if ($cat_id) {
            $cat = Category::where('id', $cat_id)->first();
            $items->where('cat_id', $cat_id);
        }

        return view("admin.".self::$name.".home", [
            'items' => $items->get(),
            'cat' => $cat,
        ]);

    }

    public function sort(Request $request)
    {
        $sortList = $request->input('sort', []);
        foreach($sortList as $i => $id)
        {
            $item = TableName::where('id', $id)->first();
            if ($item) {
                $item->sort = $i;
                $item->save();
            }
        }
        return redirect()->back()->with('status', __('common.sort_success'));
    }

    public function destroy($id)
    {
        TableName::query()->findOrFail($id)->delete();
        return 'success';
    }

    public function create()
    {
        $data['categories'] = (new Category)->topLevelCategories()->get();
        return view("admin.".self::$name.".create", $data);
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
            'name.*' => 'required|string|max:191',
            'cat_id' => 'required|exists:cats,id',
            'image' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = new TableName();
        $table->name = request('name');
        $table->cat_id = request('cat_id');
        $table->image = request('image');
        $table->slider = request('slider');
        $table->description = request('description');
        $table->price = request('price');
        $table->status = request('status');
        $table->save();
        
        return redirect(route("admin.".self::$name.".index").'?cat='.$table->cat_id)->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $data['categories'] = (new Category)->topLevelCategories()->get();
        $data['item'] = TableName::findOrFail($id);
        return view("admin.".self::$name.".edit", $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name.*' => 'required|string|max:191',
            'cat_id' => 'required|exists:cats,id',
            'image' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = TableName::query()->findOrFail($id);
        $table->name = request('name');
        $table->cat_id = request('cat_id');
        $table->image = request('image');
        $table->slider = request('slider');
        $table->description = request('description');
        $table->price = request('price');
        $table->status = request('status');
        $table->save();

        return redirect(route("admin.".self::$name.".index").'?cat='.$table->cat_id)->with('status', __('common.update'));
    }

}

