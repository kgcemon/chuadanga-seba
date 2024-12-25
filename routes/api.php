<?php

use App\Http\Controllers\imageSliderController;
use App\Http\Controllers\SebaCategoryController;
use App\Models\ImageSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("image-slider-api", [imageSliderController::class, "index"]);
Route::get("all-seba-category", [SebaCategoryController::class, "index"]);
