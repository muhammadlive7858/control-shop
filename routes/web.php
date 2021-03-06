<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashbord;
use App\Http\Controllers\HodimlarController;
use App\Http\Controllers\OmborxonaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SotuvOfisi;
use App\Http\Controllers\sklad;
use App\Http\Controllers\QarzCantroller;
// use App\Models\Product;
// use App\Models\Category;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('index',function(){
    return view('admin.index');
})->name('admin.index');
// dashbord
Route::get('dashbord',[Dashbord::class,"index"])->name('dashbord');
// Kategoriya route
Route::resource('category',CategoryController::class)->names('category');
Route::resource('product',ProductController::class)->names('product');
// Sotuv
Route::get('shopping',[SotuvOfisi::class,'index'])->name('shop-index');
Route::get('product-id',[SotuvOfisi::class,'productid'])->name('product-id');
Route::get('show-cate',[SotuvOfisi::class,'showcate'])->name('shop-show-cate');
Route::post('sotish',[SotuvOfisi::class,'sotish'])->name('sotish');
Route::get('tozalash',[Sotuvofisi::class,'tozalash'])->name('tozalash');

// sklad
Route::get('omborxona',[sklad::class,'index'])->name('ombor');
Route::post('search',[sklad::class,'show'])->name('search');
Route::post('search' , [OmborxonaController::class , 'index'])->name('searchombor');
// users
Route::resource('users',HodimlarController::class)->names('users');


