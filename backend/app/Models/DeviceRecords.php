<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceRecords extends Model
{
    protected $fillable = [
        "id",
        "device_id",
        "temp",
        "hum",
        "measurement_time",
    ];
    public $timestamps = false;
    public $incrementing = false;
}
