<?php

namespace App\Http\Controllers;
use App\Models\AppDev;
use Illuminate\Http\Request;

class AppDevelopmentController extends Controller
{
    public function index(){
        $appData = AppDev::first();

        return view("Home.appdevelopment", compact("appData"));
    }
}
