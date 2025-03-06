<?php

namespace App\Http\Controllers;
use App\Models\TravelDoc;
use Illuminate\Http\Request;

class TravelDocController extends Controller
{
    //

    public function index()
    {
        $travelData = TravelDoc::first(); // Fetch first row from `travel_docs` table
        return view("Home.traveldoc", compact("travelData"));
    }

}
