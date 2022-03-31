<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;
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

Route::get('/', [App\Http\Controllers\UrlShortener::class, 'index'])->name('index');

Route::get('/shorturlredirect', [App\Http\Controllers\UrlShortener::class, 'shorturlredirect'])->name('shorturlredirect');
Route::post('/generateshorturl', [App\Http\Controllers\UrlShortener::class, 'generateshorturl'])->name('generateshorturl');

Route::get('/showurls', [App\Http\Controllers\UrlShortener::class, 'showurls'])->name('showurls');

