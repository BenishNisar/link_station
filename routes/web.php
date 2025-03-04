<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountLoginController;
use App\Http\Controllers\AppDevelopmemtBacController;
use App\Http\Controllers\AppDevelopmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\PackageDetailsBacController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SEOController;
use App\Http\Controllers\SEOOptimizationBacController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TravelDocController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebDevelopmentBacController;
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
// users
Route::get("/users", [UsersController::class, "index"])->name("Dashboard.admin.users.index");
Route::get("users/add", [UsersController::class, "add"])->name("Dashboard.admin.users.add");
Route::post("users/store", [UsersController::class, "store"])->name("Dashboard.admin.users.store");
Route::get("users/edit/{id}", [UsersController::class, "edit"])->name("Dashboard.admin.users.edit");
Route::put("users/update/{id}", [UsersController::class, "update"])->name("Dashboard.admin.users.update");
Route::delete("users/delete/{id}", [UsersController::class, "delete"])->name("Dashboard.admin.users.delete");



// roles
Route::get("roles", [RolesController::class, "index"])->name("Dashboard.admin.roles.index");
Route::get("roles/add", [RolesController::class, "add"])->name("Dashboard.admin.roles.add");
Route::post("roles/store", [RolesController::class, "store"])->name("Dashboard.admin.roles.store");
Route::get("roles/edit/{id}", [RolesController::class, "edit"])->name("Dashboard.admin.roles.edit");
Route::put("roles/update/{id}", [RolesController::class, "update"])->name("Dashboard.admin.roles.update");
Route::delete("roles/delete/{id}", [RolesController::class, "delete"])->name("Dashboard.admin.roles.delete");



// Contact Management Routes
Route::get("contactus", [ContactUsController::class, "index"])->name("Dashboard.admin.contactus.index");
Route::get("contactus/add", [ContactUsController::class, "add"])->name("Dashboard.admin.contactus.add");
Route::post("contactus/store", [ContactUsController::class, "store"])->name("Dashboard.admin.contactus.store");
Route::get("contactus/edit/{id}", [ContactUsController::class, "edit"])->name("Dashboard.admin.contactus.edit");
Route::put("contactus/update/{id}", [ContactUsController::class, "update"])->name("Dashboard.admin.contactus.update");
Route::delete("contactus/delete/{id}", [ContactUsController::class, "destroy"])->name("Dashboard.admin.contactus.delete");



// Web Development Management Routes
Route::get("web_development", [WebDevelopmentBacController::class, "index"])->name("Dashboard.admin.web_development.index");
Route::get("web_development/add", [WebDevelopmentBacController::class, "add"])->name("Dashboard.admin.web_development.add");
Route::post("web_development/store", [WebDevelopmentBacController::class, "store"])->name("Dashboard.admin.web_development.store");
Route::get("web_development/edit/{id}", [WebDevelopmentBacController::class, "edit"])->name("Dashboard.admin.web_development.edit");
Route::put("web_development/update/{id}", [WebDevelopmentBacController::class, "update"])->name("Dashboard.admin.web_development.update");
Route::delete("web_development/delete/{id}", [WebDevelopmentBacController::class, "destroy"])->name("Dashboard.admin.web_development.delete");



// Web Development Management Routes
Route::get("package_detail", [PackageDetailsBacController::class, "index"])->name("Dashboard.admin.package_detail.index");
Route::get("package_detail/add", [PackageDetailsBacController::class, "add"])->name("Dashboard.admin.package_detail.add");
Route::post("package_detail/store", [PackageDetailsBacController::class, "store"])->name("Dashboard.admin.package_detail.store");
Route::get("package_detail/edit/{id}", [PackageDetailsBacController::class, "edit"])->name("Dashboard.admin.package_detail.edit");
Route::put("package_detail/update/{id}", [PackageDetailsBacController::class, "update"])->name("Dashboard.admin.package_detail.update");
Route::delete("package_detail/delete/{id}", [PackageDetailsBacController::class, "destroy"])->name("Dashboard.admin.package_detail.delete");

// app_development
Route::get("app_development", [AppDevelopmemtBacController::class, "index"])->name("Dashboard.admin.app_development.index");
Route::get("app_development/add", [AppDevelopmemtBacController::class, "add"])->name("Dashboard.admin.app_development.add");
Route::post("app_development/store", [AppDevelopmemtBacController::class, "store"])->name("Dashboard.admin.app_development.store");
Route::get("app_development/edit/{id}", [AppDevelopmemtBacController::class, "edit"])->name("Dashboard.admin.app_development.edit");
Route::put("app_development/update/{id}", [AppDevelopmemtBacController::class, "update"])->name("Dashboard.admin.app_development.update");
Route::delete("app_development/delete/{id}", [AppDevelopmemtBacController::class, "destroy"])->name("Dashboard.admin.app_development.delete");

// digital_market
Route::get("digital_market", [DigitalMarketingController::class, "index"])->name("Dashboard.admin.digital_market.index");
Route::get("digital_market/add", [DigitalMarketingController::class, "add"])->name("Dashboard.admin.digital_market.add");
Route::post("digital_market/store", [DigitalMarketingController::class, "store"])->name("Dashboard.admin.digital_market.store");
Route::get("digital_market/edit/{id}", [DigitalMarketingController::class, "edit"])->name("Dashboard.admin.digital_market.edit");
Route::put("digital_market/update/{id}", [DigitalMarketingController::class, "update"])->name("Dashboard.admin.digital_market.update");
Route::delete("digital_market/delete/{id}", [DigitalMarketingController::class, "destroy"])->name("Dashboard.admin.digital_market.delete");


// seo
Route::get("seo_opt", [SEOOptimizationBacController::class, "index"])->name("Dashboard.admin.seo_opt.index");
Route::get("seo_opt/add", [SEOOptimizationBacController::class, "add"])->name("Dashboard.admin.seo_opt.add");
Route::post("seo_opt/store", [SEOOptimizationBacController::class, "store"])->name("Dashboard.admin.seo_opt.store");
Route::get("seo_opt/edit/{id}", [SEOOptimizationBacController::class, "edit"])->name("Dashboard.admin.seo_opt.edit");
Route::put("seo_opt/update/{id}", [SEOOptimizationBacController::class, "update"])->name("Dashboard.admin.seo_opt.update");
Route::delete("seo_opt/delete/{id}", [SEOOptimizationBacController::class, "destroy"])->name("Dashboard.admin.seo_opt.delete");
