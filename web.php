<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('user.mainpage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ======================================================

Route::get('register', function () {

    return view('User.register');
});

Route::get('show',[UserController::class,'showpage']);

Route::get('banner',[BannerController::class,'banner']);

// Product route==========================================
Route::get('product',[ProductController::class,'index'])->name('product');
Route::get('add/product',[ProductController::class,'create']);
Route::post('store/product',[ProductController::class,'store']);

// category route=====================================================
Route::get('category',[CategoryController::class,'index']);
Route::get('add/category',[CategoryController::class,'create']);
Route::post('store/category',[CategoryController::class,'store']);


Route::resource('user/login', UserController::class);
Route::resource('user/product', ProductController::class);
