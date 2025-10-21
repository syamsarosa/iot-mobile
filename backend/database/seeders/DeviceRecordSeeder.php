<?php

namespace Database\Seeders;

use App\Models\DeviceRecords;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeviceRecords::insert([
            [
                'id' => '202409092203042',
                'device_id' => '2',
                'temp' => 25.50,
                'hum' => 51.00,
                'measurement_time' => '2024-09-09 22:03:04'
            ],
            [
                'id' => '202409092203252',
                'device_id' => '2',
                'temp' => 26.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-09 22:03:25'
            ],
            [
                'id' => '202409092207032',
                'device_id' => '2',
                'temp' => 26.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-09 22:07:03'
            ],
            [
                'id' => '202409092207222',
                'device_id' => '2',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-09 22:07:22'
            ],
            [
                'id' => '202409092207491',
                'device_id' => '1',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-09 22:07:49'
            ],
            [
                'id' => '202409101423231',
                'device_id' => '1',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-10 14:23:23'
            ],
            [
                'id' => '202409101423411',
                'device_id' => '1',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-10 14:23:41'
            ],
            [
                'id' => '202409101423522',
                'device_id' => '2',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-10 14:23:52'
            ],
            [
                'id' => '202409101424321',
                'device_id' => '1',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-10 14:24:32'
            ],
            [
                'id' => '202409101424532',
                'device_id' => '2',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-10 14:24:53'
            ],
            [
                'id' => '202409101428071',
                'device_id' => '1',
                'temp' => 28.00,
                'hum' => 51.00,
                'measurement_time' => '2024-09-10 14:28:07'
            ],
            [
                'id' => '202409101619242',
                'device_id' => '2',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-10 16:19:24'
            ],
            [
                'id' => '202409101620501',
                'device_id' => '1',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-10 16:20:50'
            ],
            [
                'id' => '202409111503291',
                'device_id' => '1',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-11 15:03:29'
            ],
            [
                'id' => '202409111505171',
                'device_id' => '1',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-11 15:05:17'
            ],
            [
                'id' => '202409111505323',
                'device_id' => '3',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-11 15:05:32'
            ],
            [
                'id' => '202409111507582',
                'device_id' => '2',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-11 15:07:58'
            ],
            [
                'id' => '202409111634012',
                'device_id' => '2',
                'temp' => 25.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-11 16:34:01'
            ],
            [
                'id' => '202409111636501',
                'device_id' => '1',
                'temp' => 27.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-11 16:36:50'
            ],
            [
                'id' => '202409131451171',
                'device_id' => '1',
                'temp' => 27.00,
                'hum' => 67.00,
                'measurement_time' => '2024-09-13 14:51:17'
            ],
            [
                'id' => '202409131453013',
                'device_id' => '3',
                'temp' => 31.00,
                'hum' => 60.00,
                'measurement_time' => '2024-09-13 14:53:01'
            ],
            [
                'id' => '202409162011311',
                'device_id' => '1',
                'temp' => 31.45,
                'hum' => 60.45,
                'measurement_time' => '2024-09-16 20:11:31'
            ],
            [
                'id' => '202409162011481',
                'device_id' => '1',
                'temp' => 32.45,
                'hum' => 60.45,
                'measurement_time' => '2024-09-16 20:11:48'
            ],
            [
                'id' => '202409162012061',
                'device_id' => '1',
                'temp' => 30.45,
                'hum' => 60.45,
                'measurement_time' => '2024-09-16 20:12:06'
            ],
            [
                'id' => '202409162039412',
                'device_id' => '2',
                'temp' => 31.45,
                'hum' => 60.45,
                'measurement_time' => '2024-09-16 20:39:41'
            ],
            [
                'id' => '202409162041322',
                'device_id' => '2',
                'temp' => 31.45,
                'hum' => 60.45,
                'measurement_time' => '2024-09-16 20:41:32'
            ],
            [
                'id' => '202409162041442',
                'device_id' => '2',
                'temp' => 31.45,
                'hum' => 65.45,
                'measurement_time' => '2024-09-16 20:41:44'
            ],
            [
                'id' => '202409162046092',
                'device_id' => '2',
                'temp' => 24.50,
                'hum' => 68.00,
                'measurement_time' => '2024-09-16 20:46:09'
            ],
            [
                'id' => '202409162046272',
                'device_id' => '2',
                'temp' => 23.50,
                'hum' => 68.00,
                'measurement_time' => '2024-09-16 20:46:27'
            ],
            [
                'id' => '202409162046472',
                'device_id' => '2',
                'temp' => 23.50,
                'hum' => 68.34,
                'measurement_time' => '2024-09-16 20:46:47'
            ]
        ]);
    }
}
