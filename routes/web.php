<?php

use App\Http\Controllers\ShortenUrlController;
use App\Http\Controllers\ShortUrlRedirectController;
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
    return view('index');
});

Route::post('/shorten', ShortenUrlController::class)->name('shorten.store');
Route::get('/{key}', ShortUrlRedirectController::class)->name('short_url.redirect');
