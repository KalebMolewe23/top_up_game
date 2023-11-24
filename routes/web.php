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
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/order/{id}', [OrderController::class, 'index'])->name('order');
Route::get('/search', [DashboardController::class, 'search'])->name('dashboard.search');

//Process Login
Route::get('/panelikigamestore', [LoginController::class, 'login'])->name('panelikigamestore');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Tampilan admin
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('isLogin');

//Tampilan CMS
Route::get('/background', [CmsController::class, 'index'])->name('background')->middleware('isLogin');
Route::post('/update/{id}', [CmsController::class, 'update'])->name('update')->middleware('isLogin');
Route::get('/social_media', [CmsController::class, 'social_media'])->name('social_media')->middleware('isLogin');
Route::get('/social_media/{id}', [CmsController::class, 'changeStatus'])->name('changeStatus')->middleware('isLogin');
Route::post('/update_sosmed/{id}', [CmsController::class, 'update_sosmed'])->name('update_sosmed')->middleware('isLogin');
Route::get('/about', [CmsController::class, 'about'])->name('about')->middleware('isLogin');
Route::post('/update_about/{id}', [CmsController::class, 'update_about'])->name('update_about')->middleware('isLogin');

//Tampilan Data Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('isLogin');

//Tampilan Data Developer
Route::get('/developer', [DeveloperController::class, 'index'])->name('developer')->middleware('isLogin');
Route::get('/tambah_developer', [DeveloperController::class, 'create_dev'])->name('tambah_developer')->middleware('isLogin');
Route::post('/proccess_create_dev', [DeveloperController::class, 'proccess_create_dev'])->name('proccess_create_dev')->middleware('isLogin');
Route::get('/edit_dev/{id}', [DeveloperController::class, 'edit_dev'])->name('edit_dev')->middleware('isLogin');
Route::put('/proccess_update_dev/{id}', [DeveloperController::class, 'proccess_update_dev'])->name('proccess_update_dev')->middleware('isLogin');
Route::delete('/delete_dev/{id}', [DeveloperController::class, 'delete_dev'])->name('delete_dev')->middleware('isLogin');

//tampilan Data Produk
Route::get('/product', [ProductController::class, 'index'])->name('product')->middleware('isLogin');
Route::get('/tambah_product', [ProductController::class, 'create_product'])->name('tambah_product')->middleware('isLogin');
Route::post('/proccess_create_product', [ProductController::class, 'proccess_create_product'])->name('proccess_create_product')->middleware('isLogin');
Route::get('/edit_product/{id}', [ProductController::class, 'edit_product'])->name('edit_product')->middleware('isLogin');
Route::post('/proccess_update_product/{id}', [ProductController::class, 'proccess_update_product'])->name('proccess_update_product')->middleware('isLogin');
Route::delete('/delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product')->middleware('isLogin');

//tampilan Data Price
Route::get('/price', [PriceController::class, 'index'])->name('price')->middleware('isLogin');

Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('isLogin'); 