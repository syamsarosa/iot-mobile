<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Device::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $device = Device::create([
            'id' => $request->input('id', 'device_' . rand(100, 999)),
            'name' => $request->input('name', 'Device ' . rand(3, 100)),
            'temp_act' => $request->input('temp_act', rand(20, 50)),
            'temp_avg' => $request->input('temp_avg', rand(20, 50)),
            'temp_min' => $request->input('temp_min', rand(20, 50)),
            'temp_max' => $request->input('temp_max', rand(20, 50)),
            'hum_act' => $request->input('hum_act', rand(30, 90)),
            'hum_avg' => $request->input('hum_avg', rand(30, 90)),
            'hum_min' => $request->input('hum_min', rand(30, 90)),
            'hum_max' => $request->input('hum_max', rand(30, 90)),
            'last_measurement' => now(),
            'ip_address' => $request->input('ip_address', fake()->ipv4()),
        ]);

        return response()->json($device, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }
}
