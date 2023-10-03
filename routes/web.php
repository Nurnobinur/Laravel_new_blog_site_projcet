<?php

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('dashboard.dashboard');
});
///Dashboard Controller
Route::get("dashboard",[DashboardController::class,"dashboard"])->name("dashbord");
Route::get("layout",[DashboardController::class,"layout"]);
//registation controller
Route::get("adduser",[RegisterController::class,"index"]);
Route::post("userstoredata",[RegisterController::class,"userstoredata"])->name("userstoredata");
//login controller
Route::get("loginuser",[LoginController::class,"loginuser"])->name("login");
Route::post("loginstoredata",[LoginController::class,"loginstoredata"]);
Route::get("logout",[LoginController::class,"logout"]);
//category route
Route::resource("category",CategoriesController::class);
