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
use App\Http\Controllers\SocialController;

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
Route::get('/order/{id}', [OrderController::class, 'index'])->name('order');
Route::get('/search', [DashboardController::class, 'search'])->name('dashboard.search');

//Process Login
Route::get('/administrator', [LoginController::class, 'login'])->name('administrator');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Tampilan admin
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Tampilan CMS
Route::get('/background', [CmsController::class, 'index'])->name('background')->middleware('auth');
Route::post('/update/{id}', [CmsController::class, 'update'])->name('update')->middleware('auth');
Route::get('/social_media', [CmsController::class, 'social_media'])->name('social_media')->middleware('auth');
Route::get('/social_media/{id}', [CmsController::class, 'changeStatus'])->name('changeStatus')->middleware('auth');
Route::post('/update_sosmed/{id}', [CmsController::class, 'update_sosmed'])->name('update_sosmed')->middleware('auth');
Route::get('/about', [CmsController::class, 'about'])->name('about')->middleware('auth');
Route::post('/update_about/{id}', [CmsController::class, 'update_about'])->name('update_about')->middleware('auth');

//Tampilan Data Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('auth');

//Tampilan Data Developer
Route::get('/developer', [DeveloperController::class, 'index'])->name('developer')->middleware('auth');
Route::get('/tambah_developer', [DeveloperController::class, 'create_dev'])->name('tambah_developer')->middleware('auth');
Route::post('/proccess_create_dev', [DeveloperController::class, 'proccess_create_dev'])->name('proccess_create_dev');
Route::get('/edit_dev/{id}', [DeveloperController::class, 'edit_dev'])->name('edit_dev');
Route::put('/proccess_update_dev/{id}', [DeveloperController::class, 'proccess_update_dev'])->name('proccess_update_dev');
Route::delete('/delete_dev/{id}', [DeveloperController::class, 'delete_dev'])->name('delete_dev');

//tampilan Data Produk
Route::get('/product', [ProductController::class, 'index'])->name('product')->middleware('auth');
Route::get('/tambah_product', [ProductController::class, 'create_product'])->name('tambah_product')->middleware('auth');
Route::post('/proccess_create_product', [ProductController::class, 'proccess_create_product'])->name('proccess_create_product');
Route::get('/edit_product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
Route::post('/proccess_update_product/{id}', [ProductController::class, 'proccess_update_product'])->name('proccess_update_product');
Route::delete('/delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');

//tampilan Data Price
Route::get('/price', [PriceController::class, 'index'])->name('price')->middleware('auth');

Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth'); 