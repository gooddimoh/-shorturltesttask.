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
    return view('welcome');
});

Route::get('/index', [\App\Http\Controllers\MakeLinkController::class, 'index']);
Route::get('/', [\App\Http\Controllers\MakeLinkController::class, 'show']);
Route::post('/shorturl', [\App\Http\Controllers\MakeLinkController::class, 'shorturl']);
Route::post('/result', [\App\Http\Controllers\MakeLinkController::class, 'result']);
Route::post('/redirectto404', [\App\Http\Controllers\MakeLinkController::class, 'redirectto404']);

