<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\imageSliderController;
use App\Http\Controllers\SebaCategoryController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ApiRoute
Route::post("add-sliderImage", [imageSliderController::class, "store"])->name("seba.add");
Route::post("admin-login", [AdminController::class, "login"])->name("login");


//pageView
Route::get("admin-login", [AdminController::class, "page"])->name("page");
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
