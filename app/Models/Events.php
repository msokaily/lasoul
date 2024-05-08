<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "events";

    protected $fillable = ['title', 'description', 'start_at', 'end_at', 'price', 'type_id', 'location_id', 'status', 'image', 'images', 'limit'];

    protected $casts = [
        'start_at' => 'date',
        'end_at' => 'date'
    ];

    protected $appends = [
        'image_url',
        'image_urls'
    ];

    protected static function booted(): void
    {
        static::deleted(function (Events $item) {
            if ($item->image) {
                Media::find($item->image)->delete();
            }
            try {
                $images_ids = json_decode($item->images);
            } catch (\Exception $e) {
                $images_ids = [];
            }
            if ($images_ids && is_array($images_ids)) {
                foreach ($images_ids as $one) {
                    Media::find($one)->delete();
                }
            }
        });
    }

    public function type()
    {
        return $this->belongsTo(EventTypes::class);
    }

    public function location()
    {
        return $this->belongsTo(Locations::class);
    }

    public function getStartAtAttribute()
    {
        return $this->attributes['start_at'] ? Carbon::parse($this->attributes['start_at'])->format('Y-m-d') : '';
    }

    public function getEndAtAttribute()
    {
        return $this->attributes['end_at'] ? Carbon::parse($this->attributes['end_at'])->format('Y-m-d') : '';
    }

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
        try { $images = json_decode($this->attributes['images']) ;} catch (\Throwable $th) { $images = ''; }
        if (is_array($images)) {
            return Media::whereIn('id', $images)->get();
        } else {
            return Media::find($this->attributes['images']);
        }
    }
    
}
