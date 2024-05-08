<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use SoftDeletes;

    protected $table = "employees";

    protected $appends = ['image_url'];

    public static $default_image = 'images/default_avatar.png';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
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

    public function setStatusAttribute($value) {
        $updatedValue = $value;
        if ($value) {
            $updatedValue = 1;
        } else {
            $updatedValue = 0;
        }
        $this->attributes['status'] = $updatedValue;
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

    public function services()
    {
        return $this->hasMany(ServiceEmployees::class, 'employee_id');
    }

    public function working_times()
    {
        return $this->hasMany(WorkingTimes::class, 'employee_id');
    }

}
