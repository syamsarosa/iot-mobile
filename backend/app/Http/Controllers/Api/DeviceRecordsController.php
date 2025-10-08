<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeviceRecords;
use Illuminate\Http\Request;

class DeviceRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $deviceId)
    {
        return response()->json(DeviceRecords::where('device_id', '=', $deviceId)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DeviceRecords $deviceRecords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeviceRecords $deviceRecords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeviceRecords $deviceRecords)
    {
        //
    }
}
