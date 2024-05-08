<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Accommodation extends Model
{
    use SoftDeletes;

    protected $table = "accommodations";

    protected $appends = ['url'];

    public static $images_dir = 'public/uploads/accommodations/';
    public static $default_image = 'images/default_accommodation.png';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'number',
        'price',
        'bundle_price',
        'local_price',
        'type',
        'description',
        'location_id',
        'balcony',
        'terrace',
        'extra_bed',
        'twin_bed',
        'baby_cot',
        'ground_floor',
        'washing_machine',
        'space',
        'adult_capacity',
        'kids_capacity',
        'bathroom',
        'beds',
        'status'
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

    public function getUrlAttribute()
    {
        return route($this->type, $this->slug);
    }

    public function location()
    {
        return $this->belongsTo(Locations::class, 'location_id');
    }

    public function options()
    {
        return $this->hasMany(AccommodationOptions::class, 'accommodation_id')->with('option');
    }
    
    public function tags()
    {
        return $this->hasMany(AccommodationTags::class, 'accommodation_id');
    }

    public function getImageAttribute()
    {
        return $this->attributes['image'] ? asset(self::$images_dir.$this->attributes['image']) : asset(self::$default_image);
    }
    
    public function getImageUrlsAttribute()
    {
        try { $images = json_decode($this->attributes['images']) ;} catch (\Throwable $th) { $images = ''; }
        if (is_array($images)) {
            return Media::whereIn('id', $images)->get();
        } else {
            return Media::find($this->attributes['images']);
        }
    }

}
