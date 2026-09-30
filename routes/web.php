<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\LoginController;
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

Route::post('/room', [RoomController::class, 'store']);

Route::get('room/{id}', [RoomController::class, 'show']);

Route::get('rooms', [RoomController::class, 'index']);

Route::get('/room/create', [RoomController::class, 'create'])->middleware('auth');

Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->middleware('auth');

Route::post('/room/update/{id}', [RoomController::class, 'update'])->middleware('auth');

Route::get('/room/destroy/{id}', [RoomController::class, 'destroy'])->middleware('auth');


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

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/error', function () {
    return view('error', ['message'=> session('message')]);
});




