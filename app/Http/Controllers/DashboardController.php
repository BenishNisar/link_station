<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\WebDevelopment;
use App\Models\TravelDoc;
use App\Models\OfficeDet; // Model include karein


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $totalUsers = User::count();
        $totalRoles = Role::count();
        $webprojects = WebDevelopment::count();
        $travel = TravelDoc::count();
        $officeDetails = OfficeDet::first(); // Pehli entry fetch karne ke liye

        return view("Dashboard.admin.dashboard", compact("totalUsers", "totalRoles", "webprojects", "travel","officeDetails"));


    }
}
