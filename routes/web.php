<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScraperController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/csgo', function () {
    return view('csgo');
});

Route::get('/valorant', function () {
    return view('valorant');
});

Route::get('/rocketleague', function () {
    return view('rocketleague');
});

Route::get('/valopatch', function () {
    return view('/patch/valopatch');
});

Route::get('/cssmokes', function () {
    return view('/videos/cssmokes');
});


Route::get('/gallery', function () {
    return view('/gallery');
});

Route::post('/gallery-upload', function () {
    return view('includes/gallery-upload');
});

Route::get('/cspatch', [ScraperController::class, 'cs']);