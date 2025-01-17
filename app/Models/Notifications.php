<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Notifications extends Model
{
    use HasTranslations, SoftDeletes;
    public $translatable = ['title', 'details'];

}
