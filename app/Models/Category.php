<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    use HasTranslations;

    protected $table = "cats";

    protected $translatable = ['name'];

    protected $fillable = ['name', 'parent_id', 'image', 'status'];

    protected $appends = ['image_url'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('sort', 'asc');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id')->orderBy('sort', 'asc');
    }

    public function topLevelCategories()
    {
        return $this->whereDoesntHave('children');
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
