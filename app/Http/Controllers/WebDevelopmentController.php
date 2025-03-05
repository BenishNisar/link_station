<?php

namespace App\Http\Controllers;
use App\Models\WebDevelopment;
use Illuminate\Http\Request;

class WebDevelopmentController extends Controller
{
    //
    public function index(){
        $webDevData = WebDevelopment::first(); // Fetch first row from `web_dev` table

        return view("Home.webdevelopment", compact("webDevData"));

    }
}
