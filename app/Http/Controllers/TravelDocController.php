<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelDocController extends Controller
{
    //
    public function index(){
            return view("Home.traveldoc");
    }
}
