<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;

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
Route::get('order/{id}', [OrderController::class, 'index'])->name('order');
Route::get('search', [DashboardController::class, 'search'])->name('dashboard.search');

//Process Login
Route::get('administrator', [LoginController::class, 'login'])->name('administrator');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Tampilan admin
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Tampilan CMS
Route::get('background', [CmsController::class, 'index'])->name('background')->middleware('auth');
Route::put('background/{id}', [CmsController::class, 'update'])->name('update.bg')->middleware('auth');

//Tampilan Data Customer
Route::get('customer', [CustomerController::class, 'index'])->name('customer')->middleware('auth');
Route::get('customer', [CustomerController::class, 'index'])->name('customer')->middleware('auth');

//Tampilan Data Developer
Route::get('developer', [DeveloperController::class, 'index'])->name('developer')->middleware('auth');
Route::get('tambah_developer', [DeveloperController::class, 'create_dev'])->name('tambah_developer')->middleware('auth');
Route::post('proccess_create_dev', [DeveloperController::class, 'proccess_create_dev'])->name('proccess_create_dev');
Route::get('edit_dev/{id}', [DeveloperController::class, 'edit_dev'])->name('edit_dev');
Route::put('proccess_update_dev/{id}', [DeveloperController::class, 'proccess_update_dev'])->name('proccess_update_dev');
Route::delete('delete_dev/{id}', [DeveloperController::class, 'delete_dev'])->name('delete_dev');

//tampilan Data Produk
Route::get('product', [ProductController::class, 'index'])->name('product')->middleware('auth');

//tampilan Data Price
Route::get('price', [PriceController::class, 'index'])->name('price')->middleware('auth');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');