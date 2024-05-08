<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use SoftDeletes;

    protected $table = "orders";

    protected $appends = [
        'customer'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'guest_info',
        'paid_at',
        'payment_type',
        'total_price',
        'price_type',
        'status',
        'created_at'
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
    protected $casts = [
        'guest_info' => 'array',
        'refund_at' => 'date'
    ];

    public function setStatusAttribute($value) {
        $updatedValue = $value;
        if ($value == 1 || $value == true) {
            $updatedValue = 'Confirmed';
        } else if ($value == 0 || $value == false) {
            $updatedValue = 'Canceled';
        } else {
            $updatedValue = $value;
        }
        $this->attributes['status'] = $updatedValue;
    }

    public function products()
    {
        return $this->hasMany(BookingProducts::class, 'order_id', 'id')->with('options', 'product');
    }

    public function getCustomerAttribute()
    {
        if ($this->attributes['user_id'] == -1)
        {
            if (is_array($this->guest_info)) {
                return new User($this->guest_info);
            } else {
                return [];
            }
        }
        return $this->belongsTo(User::class, 'user_id', 'id')->first();
    }

}
