<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        "id",
        "name",
        "temp_act",
        "temp_avg",
        "temp_min",
        "temp_max",
        "hum_act",
        "hum_avg",
        "hum_min",
        "hum_max",
        "last_measurement",
        "ip_address",
    ];
    public $timestamps = false;
    public $incrementing = false;
}
