<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BookingProducts extends Model
{
    use SoftDeletes;

    protected $table = "order_products";

    protected $appends = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'entity_id',
        'order_id',
        'start_date',
        'end_date',
        'arrival_time',
        'price',
        'adults',
        'kids',
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

    public function booking() {
        return $this->hasOne(Booking::class, 'id', 'order_id');
    }

    public function product() {
        if ($this->type == 'service') {
            return $this->hasOne(Service::class, 'id', 'entity_id')->with('options');
        } else {
            return $this->hasOne(Accommodation::class, 'id', 'entity_id')->with('options');
        }
    }

    public function options() {
        return $this->hasMany(BookingOptions::class, 'order_product_id', 'id')->with(['option', 'duration']);
    }

}
