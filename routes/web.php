<?php

use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\FeatureController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\GoogleController;
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
Route::get('/term', function (){
    return view("client.term");
})->name("term");
Route::get('/privacy', function (){
    return view("client.privacy");
})->name("privacy");
Route::get('/logout', [UserController::class,"login"])->name("client.logout");
Route::get("/movie/{slug?}", [CategoryController::class, "index", "slug"])->where(["slug"])->name("movie");
Route::get("/feature/{slug?}", [FeatureController::class, "index", "slug"])->where(["slug"])->name("feature");
Route::get("/play/{slug?}/{episode?}", [CategoryController::class, "play", "slug","episode"])->where(["slug","episode"])->name("play");
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});
// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
Route::get("/test",function (){
    return view("client.test");
});



