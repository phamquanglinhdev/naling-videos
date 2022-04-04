<?php

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
    return view('client.index');
})->name("index");
Route::get("/movie/{slug?}", [\App\Http\Controllers\Client\CategoryController::class, "index", "slug"])->where(["slug"])->name("movie");
Route::get("/play/{slug?}/{episode?}", [\App\Http\Controllers\Client\CategoryController::class, "play", "slug","episode"])->where(["slug","episode"])->name("play");
