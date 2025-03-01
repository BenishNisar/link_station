<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountLoginController;
use App\Http\Controllers\AppDevelopmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\SEOController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TravelDocController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebDevelopmentController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// frontend
Route::get("/",[WelcomeController::class,"index"])->name("Home.welcome");
Route::get("/service",[ServiceController::class,"index"])->name("Home.service");
Route::get("/about",[AboutController::class,"index"])->name("Home.about");
Route::get("/contact",[ContactController::class,"index"])->name("Home.");
Route::get("/webdevelopment",[WebDevelopmentController::class,"index"])->name("Home.webdevelopment");
Route::get("/appdevelopment",[AppDevelopmentController::class,"index"])->name("Home.appdevelopment");
Route::get("/packaging",[PackagingController::class,"index"])->name("Home.packaging");
Route::get("/digital",[DigitalController::class,"index"])->name("Home.packaging");
Route::get("/seo",[SEOController::class,"index"])->name("Home.seo");
Route::get("/traveldoc",[TravelDocController::class,"index"])->name("Home.traveldoc");
Route::get("/customer",[CustomerController::class,"index"])->name("Home.customer");

Route::get("/dashboard",[DashboardController::class,"index"])->name("Dashboard.admin.dashboard");
Route::get("/accountlogin", [AccountLoginController::class, "index"])->name("login");
Route::post("/accountlogin", [AccountLoginController::class, "store"])->name("auth.accountlogin.store");
Route::post("/logout", [AccountLoginController::class, "logout"])->name("logout");

// Middleware Protected Routes
Route::middleware(['auth', 'accountlogin'])->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("Dashboard.admin.dashboard");
});
Route::get("/users", [UsersController::class, "index"])->name("dashboard.admin.users.index");
