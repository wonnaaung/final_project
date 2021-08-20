<?php

use App\Http\Controllers\AuthlayoutController;
use App\Http\Controllers\HomePageController;
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
    return view('welcome');
});
// authetication 
Route::get("/login",[AuthlayoutController::class,"login"])->name("login");

Route::get("/register",[AuthlayoutController::class,"register"])->name("register");

Route::get("/",[HomePageController::class,"home"])->name("home");