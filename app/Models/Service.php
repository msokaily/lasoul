<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use SoftDeletes;

    protected $table = "services";

    protected $appends = ['image_url', 'image_urls', 'default_price'];

    public static $images_dir = 'public/uploads/services/';
    public static $default_image = 'images/default_service.png';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'price',
        'bundle_price',
        'local_price',
        'description',
        'image',
        'location_id',
        'duration',
        'lead_time',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function getImageUrlAttribute()
    {
        try { $images = json_decode($this->attributes['image']) ;} catch (\Throwable $th) { $images = ''; }
        if (is_array($images)) {
            return Media::whereIn('id', $images)->first();
        } else {
            return Media::find($this->attributes['image']);
        }
    }
    
    public function getImageUrlsAttribute()
    {
        try { $images = json_decode($this->attributes['image']) ;} catch (\Throwable $th) { $images = ''; }
        if (is_array($images)) {
            return Media::whereIn('id', $images)->get();
        } else {
            return Media::find($this->attributes['image']);
        }
    }

    public function service_durations()
    {
        return $this->hasMany(OptionsServicesDurations::class, 'pivot_id')->where('type', 'services');
    }

    public function getDefaultPriceAttribute()
    {
        $durations = $this->service_durations();
        if ($durations->count() > 0)
        {
            return $durations->first();
        }
        return $this->price;
    }
 
    public function categories()
    {
        return $this->hasMany(ServiceCategoriesPivot::class, 'service_id');
    }
    
    public function class_times()
    {
        return $this->hasMany(ClassTimes::class, 'service_id');
    } 

    public function class_prices()
    {
        return $this->hasMany(ClassPrices::class, 'service_id');
    }
    
    public function employees()
    {
        return $this->hasMany(ServiceEmployees::class, 'service_id');
    }

}
