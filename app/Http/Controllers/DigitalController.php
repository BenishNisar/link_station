<?php

namespace App\Http\Controllers;
use App\Models\DigitalMark;
use Illuminate\Http\Request;

class DigitalController extends Controller
{
    public function index(){
        $digitalData = DigitalMark::first(); 

        return view("Home.digital", compact("digitalData"));
    }
}
