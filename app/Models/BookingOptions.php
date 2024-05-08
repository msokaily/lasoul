<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BookingOptions extends Model
{
    use SoftDeletes;

    protected $table = "order_options";

    protected $appends = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'option_id',
        'order_product_id',
        'option_duration_id',
        'price'
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

    public function option() {
        return $this->hasOne(AccommodationOptions::class, 'option_id', 'option_id')->with('option');
    }

    public function duration() {
        return $this->hasOne(OptionsServicesDurations::class, 'id', 'option_duration_id');
    }

}
