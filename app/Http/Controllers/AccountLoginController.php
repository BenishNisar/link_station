<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AccountLoginController extends Controller
{
    //
    public function index(){
        return view("auth.accountlogin");
    }

public function store(Request $request){
$request->validate([

"email"=>"required",
"password"=>"required"


]);

$credentials=$request->only("email","password");
if(Auth::attempt($credentials)){
    $user=Auth::user();
    if($user->role_id==1){

        return redirect()->route("Dashboard.admin.dashboard");


    } else{
        Auth::logout();
        return redirect("/account/login")->withErrors(["error" => "Unauthorized access."]);

    }
}

return redirect("/accountlogin")->withErrors(["email" => "Invalid login credentials."]);


}



public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect("/accountlogin")->with("successfully");
    }

}
