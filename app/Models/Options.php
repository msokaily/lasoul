<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $appends = ['image_url', 'image_urls'];

    public static $images_dir = 'public/uploads/options/';
    public static $default_image = 'images/default_service.png';

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

    public function option_durations()
    {
        return $this->hasMany(OptionsServicesDurations::class, 'pivot_id')->with('duration')->where('type', 'options');
    }
}
