<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppDevelopmentController extends Controller
{
    public function index(){
        return view("Home.appdevelopment");
    }
}
