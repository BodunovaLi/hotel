<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('rooms', ['rooms' => Room::orderBy('id')->get()]);
    }

    public function show($id){
        return view('room', ['room' => Room::all()->where('id', $id)->first()]);
    }

    public function create(){
        return view('room_create', ['buildings' => Building::all()]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'number' => 'required',
            'building_id' => 'required',
            'sleeps' => 'required|integer|min:1',
            'price' => 'required|integer'
        ]);

        $room = new Room($validated);
        $room->save();

        return redirect('/room/' . $room->id);
    }

    public function edit(string $id){
        return view('room_edit', [
            'room' => Room::all()->where('id', $id)->first(),
            'buildings' => Building::all(),]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'number' => 'required',
            'building_id' => 'required',
            'sleeps' => 'required|integer|min:1',
            'price' => 'required|integer'
        ]);

        $room = Room::where('id', $request->id)->first();
        $room->number = $validated['number'];
        $room->building_id = $validated['building_id'];
        $room->sleeps = $validated['sleeps'];
        $room->price = $validated['price'];

        $room->save();
        return redirect('/room/' . $request->id);
    }

    public function destroy(string $id){
        Room::destroy($id);
        return redirect('/rooms');
    }
}
