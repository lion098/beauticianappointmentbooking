<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeauticianController;
use App\Http\Controllers\WorkingHourController;

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

Route::get('/index', function () {
    return view('index');
});

Route::resource('/index', BeauticianController::class);

Route::resource('/workinghour', WorkingHourController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
