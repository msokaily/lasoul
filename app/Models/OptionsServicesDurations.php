<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionsServicesDurations extends Model
{
    protected $table = "options_services_durations";

    public function duration()
    {
        return $this->hasOne(Durations::class, 'id', 'duration_id');
    }
}

