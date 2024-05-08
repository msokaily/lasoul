<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccommodationOptions extends Model
{

    protected $table = "accommodation_options";

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

    public function option()
    {
        return $this->belongsTo(Options::class, 'option_id')->with('option_durations');
    }
}
