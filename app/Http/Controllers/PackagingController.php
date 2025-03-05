<?php

namespace App\Http\Controllers;
use App\Models\PackageDet;
use Illuminate\Http\Request;

class PackagingController extends Controller
{
    //
    public function index(){

        $packagingData = PackageDet::first(); // Fetch first row from `package_details` table
        return view("Home.packaging", compact("packagingData"));
    }
}
