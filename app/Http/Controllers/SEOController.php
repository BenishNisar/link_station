<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SEOController extends Controller
{
    //
    public function index(){
        return view("Home.seo");
    }
}
