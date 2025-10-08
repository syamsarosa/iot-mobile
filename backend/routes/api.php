<?php

use App\Http\Controllers\Api\DeviceController;
use App\Http\Controllers\Api\DeviceRecordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/devices', [DeviceController::class, 'index']);
Route::post('/devices', [DeviceController::class, 'store']);
Route::get('/device-records/{deviceId}', [DeviceRecordsController::class, 'index']);
