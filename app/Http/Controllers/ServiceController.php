<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('services', ['services' => Service::all()]);
    }
    public function show($id){
        return view('service', ['service' => Service::all()->where('id', $id)->first()]);
    }
}
