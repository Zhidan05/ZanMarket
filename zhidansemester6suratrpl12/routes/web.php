<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\DispositionController;
use App\Http\Controllers\UserController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::resource('/inbox', InboxController::class)->middleware('auth');
Route::resource('/send', SendController::class)->middleware('auth');
Route::resource('/disposition', DispositionController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
Route::get('/home',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/laporaninbox',[DashboardController::class, 'inbox'])->middleware('auth');
Route::get('/laporansend',[DashboardController::class, 'send'])->middleware('auth');
Route::get('/laporandisposition',[DashboardController::class, 'disposition'])->middleware('auth');
Route::get('/laporanuser',[DashboardController::class, 'user'])->middleware('auth');
