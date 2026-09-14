<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index(){
        return view('buildings', ['buildings' => Building::orderBy('id')->get()]);
    }

    public function show($id){
        return view('building', ['building' => Building::all()->where('id', $id)->first()]);
    }
}
