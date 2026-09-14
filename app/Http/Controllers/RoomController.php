<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomController extends Controller
{
    public function index(){
        return view('rooms', ['rooms' => Room::orderBy('id')->get()]);
    }

    public function show($id){
        return view('room', ['room' => Room::all()->where('id', $id)->first()]);
    }
}
