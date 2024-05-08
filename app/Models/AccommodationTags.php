<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccommodationTags extends Model
{

    protected $table = "accommodation_tags";

    protected $appends = [];

    public static $images_dir = 'public/uploads/accommodations/';
    public static $default_image = 'images/default_accommodation.png';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    public function tag()
    {
        return $this->belongsTo(Tags::class, 'tag_id');
    }
}
