<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/login', [App\Http\Controllers\LoginAndRegisterController::class, 'loginAndRegister'])->name('login');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//main
Route::get('/ads', [App\Http\Controllers\AdsController::class, 'index'])->name('ads');
Route::post('/ads_create', [App\Http\Controllers\AdsController::class, 'create'])->name('ads_create');

Route::get('/timeline1', [App\Http\Controllers\AdsController::class, 'timeline1'])->name('timeline1');
Route::get('/timeline2', [App\Http\Controllers\AdsController::class, 'timeline2'])->name('timeline2');
Route::get('/timeline3', [App\Http\Controllers\AdsController::class, 'timeline3'])->name('timeline3');

Route::get('/ads_status', [App\Http\Controllers\AdsController::class, 'ads_status'])->name('ads_status');




