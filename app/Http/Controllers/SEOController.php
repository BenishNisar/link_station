<?php

namespace App\Http\Controllers;
use App\Models\SEO;
use Illuminate\Http\Request;

class SEOController extends Controller
{
    //
    public function index()
    {
        $seoData = SEO::first(); // Fetch first row from `seo_optimization` table
        return view("Home.seo", compact("seoData"));
    }
}
