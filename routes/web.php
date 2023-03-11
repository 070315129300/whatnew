<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoadController;

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


Route::resource('pages', UserController::class);
Route::get('/', [LoadController::class, 'index']);
Route::get('businessnews', [LoadController::class, 'businessnews']);
Route::get('entertainmentnews', [LoadController::class, 'entertainmentnews']);
Route::get('whatnews', [LoadController::class, 'whatnews']);
Route::get('travel', [LoadController::class, 'travel']);
Route::get('lifestyle', [LoadController::class, 'lifestyle']);
Route::get('video', [LoadController::class, 'video']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
