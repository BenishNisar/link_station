<?php

namespace App\Http\Controllers;
use App\Models\CustomerBac;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customerData = CustomerBac::first(); // Fetch first row from `customers` table
        return view("Home.customerfront", compact("customerData"));
    }

}
