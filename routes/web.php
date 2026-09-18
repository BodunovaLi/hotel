<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Models\Accommodation;
use App\Models\Booking;
use App\Models\Guest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World']);
});

Route::get('/buildings', [BuildingController::class, 'index']);

Route::get('/building/{id}', [BuildingController::class, 'show']);

Route::get('/room/create', [RoomController::class, 'create']);

Route::post('/room', [RoomController::class, 'store']);

Route::get('room/{id}', [RoomController::class, 'show']);

Route::get('rooms', [RoomController::class, 'index']);

Route::get('/room/edit/{id}', [RoomController::class, 'edit']);

Route::post('/room/update/{id}', [RoomController::class, 'update']);

Route::get('/room/destroy/{id}', [RoomController::class, 'destroy']);

Route::get('/guests', function (){
    return view('guests',['guests' => Guest::orderBy('id')->get()]);
} );

Route::get('/bookings', function (){
    return view('bookings',['bookings' => Booking::orderBy('id')->get()]);
} );

Route::get('/accommodations', [AccommodationController::class, 'index']);

Route::get('/accommodation/{id}', [AccommodationController::class, 'show']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/service/{id}', [ServiceController::class, 'show']);





