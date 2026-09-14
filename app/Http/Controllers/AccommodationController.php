<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index(){
        return view('accommodations',['accommodations' => Accommodation::orderBy('id')->get()]);
    }

    public function show($id){
        return view('accommodation', ['accommodation' => Accommodation::all()->where('id', $id)->first()]);
    }
}
