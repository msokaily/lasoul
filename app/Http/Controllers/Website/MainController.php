<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::where('status', 1)->where(function($q) {
            $q->where('parent_id', null)->orWhere('parent_id', 0);
        })->with(['children' => function($q1) {
            $q1->where('status', 1);
        }])->with(['products' => function($q1) {
            $q1->where('status', 1);
        }])->orderBy('sort', 'asc');

        $params['menu'] = CategoryResource::collection($data->get());
        
        return view('website.home', $params);
    }
}
