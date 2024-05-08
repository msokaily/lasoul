<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{

    use HasTranslations;

    protected $table = "products";

    protected $translatable = ['name', 'description'];

    protected $fillable = ['name', 'cat_id', 'description', 'image', 'slider', 'price', 'status'];

    protected $appends = ['image_url', 'slider_urls'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function getSliderUrlsAttribute()
    {
        try { $images = json_decode($this->attributes['slider']) ;} catch (\Throwable $th) { $images = ''; }
        if (is_array($images)) {
            return Media::whereIn('id', $images)->get();
        } else {
            $m = Media::find($this->attributes['slider']);
            if ($m) {
                return [Media::find($this->attributes['slider'])];
            } else {
                return [];
            }
        }
    }
    
    public function getImageUrlAttribute()
    {
        try { $images = json_decode($this->attributes['image']) ;} catch (\Throwable $th) { $images = ''; }
        if (is_array($images)) {
            return Media::whereIn('id', $images)->get();
        } else {
            return Media::find($this->attributes['image']);
        }
    }
}
