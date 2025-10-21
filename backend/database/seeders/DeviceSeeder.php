<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Device::insert([
            [
                'id' => '1',
                'name' => 'device 1',
                'temp_act' => 30.45,
                'temp_avg' => 30.45,
                'temp_min' => 32.45,
                'temp_max' => 31.45,
                'hum_act' => 60.45,
                'hum_avg' => 60.45,
                'hum_min' => 60.45,
                'hum_max' => 60.45,
                'last_measurement' => '2024-09-16 20:12:06',
                'ip_address' => '161.92.21.12'
            ],
            [
                'id' => '2',
                'name' => 'device 2',
                'temp_act' => 23.50,
                'temp_avg' => 23.50,
                'temp_min' => 31.45,
                'temp_max' => 27.64,
                'hum_act' => 68.34,
                'hum_avg' => 68.34,
                'hum_min' => 68.34,
                'hum_max' => 65.12,
                'last_measurement' => '2024-09-16 20:46:47',
                'ip_address' => '161.92.21.12'
            ],
            [
                'id' => '3',
                'name' => 'device 3',
                'temp_act' => 31.00,
                'temp_avg' => 31.00,
                'temp_min' => 31.00,
                'temp_max' => 31.00,
                'hum_act' => 60.00,
                'hum_avg' => 60.00,
                'hum_min' => 60.00,
                'hum_max' => 60.00,
                'last_measurement' => '2024-09-13 14:53:01',
                'ip_address' => '161.92.21.12'
            ]
        ]);
    }
}
