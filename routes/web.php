<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
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

// Route::get('category.index',function(){
//     return view('admin.indexMain');
// })->name('category.index');

// Kategoriya route
Route::resource('category',CategoryController::class)->names('category');