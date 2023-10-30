<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
//halaman tampilan untuk customer
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Process Login
Route::get('administrator', [LoginController::class, 'login'])->name('administrator');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Tampilan home
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');