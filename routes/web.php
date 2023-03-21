<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\AdminController;


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

//user controller
Route::resource('pages', UserController::class);

//load controller
Route::get('/', [LoadController::class, 'index']);
Route::get('businessnews', [LoadController::class, 'businessnews']);
Route::get('entertainmentnews', [LoadController::class, 'entertainmentnews']);
Route::get('whatnews', [LoadController::class, 'whatnews']);
Route::get('travel', [LoadController::class, 'travel']);
Route::get('tournigeria',[LoadController::class, 'tournigeria']);
Route::get('tourworld', [LoadController::class, 'tourworld']);
Route::get('lifestyle', [LoadController::class, 'lifestyle']);
Route::get('lagosstyle', [LoadController::class, 'lagosstyle']);
Route::get('abujastyle', [LoadController::class,'abujastyle']);
Route::get('football', [LoadController::class, 'football']);
Route::get('funnyvideos', [LoadController::class, 'funnyvideos']);
//Route::get('video', [LoadController::class, 'video']);
Route::get('terms', [LoadController::class, 'terms']);
Route::get('privacy', [LoadController::class, 'privacy']);
Route::get('compliances', [LoadController::class, 'compliances']);

//admin controller
Route::get('/dashboard',[AdminController::class, 'redirect']);
Route::post('insertvideo', [AdminController::class, 'insertvideo']);
Route::post('insertuser', [AdminController::class, 'insertuser']);
Route::get('adduser', [AdminController::class, 'adduser']);
Route::get('addvideos', [AdminController::class, 'addvideos']);
Route::get('alluser', [AdminController::class, 'alluser']);
Route::get('video', [AdminController::class, 'video']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
