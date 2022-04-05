<?php

use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\UserController;
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

Route::get('/', [IndexController::class,"gender"])->name("index");
Route::get('/login', [UserController::class,"login"])->name("client.login");
Route::get('/logout', [UserController::class,"login"])->name("client.logout");
Route::get("/movie/{slug?}", [CategoryController::class, "index", "slug"])->where(["slug"])->name("movie");
Route::get("/play/{slug?}/{episode?}", [CategoryController::class, "play", "slug","episode"])->where(["slug","episode"])->name("play");
