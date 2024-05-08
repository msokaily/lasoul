<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Options;
use App\Models\Accommodation;
use App\Models\AccommodationOptions;
use App\Models\AccommodationTags;
use App\Models\Tags;
use App\Models\Locations;
use App\Models\Media;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


class AccommodationsController extends Controller
{
    static $name = 'accommodations';

    public function index(Request $request)
    {
        $items = Accommodation::where('type', $request->input('type'));

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
        $accommodation = Accommodation::where('id', $id)->first();
       
        Accommodation::query()->findOrFail($id)->delete();
        AccommodationTags::where('accommodation_id',$id)->delete();

        try{
            $accommodation = json_decode($accommodation->images);
            
            $medias = Media::whereIn('id', $accommodation)->get();
            foreach($medias as $media_file){
                Media::query()->findOrFail($media_file->id)->delete();
            }
        }catch(\Exception $e){
        }
        
        return 'success';
    }

    public function create(Request $request)
    {
        $locations = Locations::where('status', 1)->get();
        $options = Options::get();
        $amenities_tags = Tags::where('type', 'amenities')->get();
        $details_tags = Tags::where('type', 'details')->get();
        $product = request('type');
        $product = Str::ucfirst(Str::substr($product, 0, -1));

        return view("admin.".self::$name.".create", compact('locations', 'product', 'amenities_tags', 'details_tags', 'options'));
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
            'number' => 'required|string|max:191',
            'location' => 'required',
            'space' => 'required',
            'adult_capacity' => 'required',
            'kids_capacity' => 'required',
            'bathroom' => 'required',
            'description' => 'required',
            'beds' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = new Accommodation();

        $table->type = request('type');
        $table->title = request('title');
        $table->number = request('number');
        $table->location_id = request('location');
        $table->space = request('space');
        $table->adult_capacity = request('adult_capacity');
        $table->kids_capacity = request('kids_capacity');
        $table->bathroom = request('bathroom');
        $table->beds = request('beds');
        $table->bathroom = request('bathroom');
        $table->description = request('description');
        $table->price = request('price');
        $table->bundle_price = request('bundle_price');
        $table->local_price = request('local_price');
        $table->status = request('status');
        $table->slug = Str::slug($table->title);

        $table->balcony = 0;
        $table->terrace = 0;
        $table->extra_bed = 0;
        $table->twin_bed = 0;
        $table->baby_cot = 0;
        $table->ground_floor = 0;
        $table->washing_machine = 0;

        if ($request->has('balcony'))
            $table->balcony = 1; 
        if ($request->has('terrace'))
            $table->terrace = 1; 
        if ($request->has('extra_bed'))
            $table->extra_bed = 1; 
        if ($request->has('twin_bed'))
            $table->twin_bed = 1;    
        if ($request->has('baby_cot'))
            $table->baby_cot = 1;  
        if ($request->has('ground_floor'))
            $table->ground_floor = 1; 
        if ($request->has('washing_machine'))
            $table->washing_machine = 1; 

        if ($request->image)
        {   
            $image = $request->file('image');
            $name = time().'_'.rand(111111,999999).'.'.$image->getClientOriginalExtension();
            $image->move(Accommodation::$images_dir, $name);
            $table->image = $name;
        }

        $table->images = $request->images;
        $table->save();

        if ($request->has('options') && count($request->input('options', [])) > 0)
        {
            foreach ($request->options as $option_id)
            {
                $amen_tags = new AccommodationOptions();
                $amen_tags->accommodation_id = $table->id;
                $amen_tags->option_id = $option_id;
                $amen_tags->save();
            }
        }

        if ($request->has('amenities_tags') && count($request->input('amenities_tags', [])) > 0)
        {
            foreach ($request->amenities_tags as $tag_id)
            {
                $amen_tags = new AccommodationTags();
                $amen_tags->accommodation_id = $table->id;
                $amen_tags->tag_id = $tag_id;
                $amen_tags->type = 'amenities';
                $amen_tags->save();
            }
        }

        if ($request->has('details_tags') && count($request->input('details_tags', [])) > 0)
        {
            foreach ($request->details_tags as $tag_id)
            {
                $amen_tags = new AccommodationTags();
                $amen_tags->accommodation_id = $table->id;
                $amen_tags->tag_id = $tag_id;
                $amen_tags->type = 'details';
                $amen_tags->save();
            }
        }

        $table->save();
        
        return redirect()->back()->with('status', __('common.create'));
    }

    public function edit($id)
    {
        $item = Accommodation::findOrFail($id);
        $locations = Locations::where('status', 1)->get();
        $options = Options::get();
        $amenities_tags = Tags::where('type', 'amenities')->get();
        $details_tags = Tags::where('type', 'details')->get();
        $product = request('type');
        $product = Str::ucfirst(Str::substr($product, 0, -1));
        $item_amenities_tags = $item->tags->where('type', 'amenities')->pluck('tag_id')->toArray();
        $item_details_tags = $item->tags->where('type', 'details')->pluck('tag_id')->toArray();

        return view("admin.".self::$name.".edit", compact('item', 'locations', 'product', 'amenities_tags', 'details_tags', 'item_amenities_tags', 'item_details_tags', 'options'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:191',
            'number' => 'required|string|max:191',
            'location' => 'required',
            'space' => 'required',
            'adult_capacity' => 'required',
            'kids_capacity' => 'required',
            'bathroom' => 'required',
            'description' => 'required',
            'beds' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $table = Accommodation::query()->findOrFail($id);

        $table->type = request('type');
        $table->title = request('title');
        $table->number = request('number');
        $table->location_id = request('location');
        $table->space = request('space');
        $table->adult_capacity = request('adult_capacity');
        $table->kids_capacity = request('kids_capacity');
        $table->bathroom = request('bathroom');
        $table->beds = request('beds');
        $table->bathroom = request('bathroom');
        $table->description = request('description');
        $table->price = request('price');
        $table->bundle_price = request('bundle_price');
        $table->local_price = request('local_price');
        $table->status = request('status');
        $table->slug = Str::slug($table->title);

        $table->balcony = 0;
        $table->terrace = 0;
        $table->extra_bed = 0;
        $table->twin_bed = 0;
        $table->baby_cot = 0;
        $table->ground_floor = 0;
        $table->washing_machine = 0;

        if ($request->has('balcony'))
            $table->balcony = 1; 
        if ($request->has('terrace'))
            $table->terrace = 1; 
        if ($request->has('extra_bed'))
            $table->extra_bed = 1; 
        if ($request->has('twin_bed'))
            $table->twin_bed = 1;    
        if ($request->has('baby_cot'))
            $table->baby_cot = 1;  
        if ($request->has('ground_floor'))
            $table->ground_floor = 1; 
        if ($request->has('washing_machine'))
            $table->washing_machine = 1; 

        if ($request->image)
        {   
            $image = $request->file('image');
            $name = time().'_'.rand(111111,999999).'.'.$image->getClientOriginalExtension();
            $image->move(Accommodation::$images_dir, $name);
            $table->image = $name;
        }

        $table->images = $request->images;
        $table->save();

        AccommodationOptions::where('accommodation_id', $id)->delete();

        if ($request->has('options') && count($request->input('options', [])) > 0)
        {
            foreach ($request->options as $option_id)
            {
                $amen_tags = new AccommodationOptions();
                $amen_tags->accommodation_id = $table->id;
                $amen_tags->option_id = $option_id;
                $amen_tags->save();
            }
        }


        AccommodationTags::where('accommodation_id', $id)->delete();

        if ($request->has('amenities_tags') && count($request->input('amenities_tags', [])) > 0)
        {
            foreach ($request->amenities_tags as $tag_id)
            {
                $amen_tags = new AccommodationTags();
                $amen_tags->accommodation_id = $table->id;
                $amen_tags->tag_id = $tag_id;
                $amen_tags->type = 'amenities';
                $amen_tags->save();
            }
        }

        if ($request->has('details_tags') && count($request->input('details_tags', [])) > 0)
        {
            foreach ($request->details_tags as $tag_id)
            {
                $amen_tags = new AccommodationTags();
                $amen_tags->accommodation_id = $table->id;
                $amen_tags->tag_id = $tag_id;
                $amen_tags->type = 'details';
                $amen_tags->save();
            }
        }

        $table->save();

        return redirect()->back()->with('status', __('common.update'));
    }

}

