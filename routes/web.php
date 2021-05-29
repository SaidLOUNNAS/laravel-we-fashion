<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

/******
 ***** Admin
 ******/

// admin
Route::get('/admin', [HomeController::class, 'index'])->name('admin');

// form create product
Route::get('/creates', [HomeController::class, 'create'])->name('admins.create');

//recover data entered by user
 Route::post('/admin', [HomeController::class, 'store'])->name('admins.store');

//   form edite data
  Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('admins.edit');

//  update data
  Route::post('/update/{id}', [HomeController::class, 'update'])->name('admins.update');

// destory form
 Route::post('/admins.destroy/{id}', [HomeController::class, 'destroy'])->name('admins.destroy');

 /******
 ***** Products
 ******/


// display all product
Route::resource('/', 'App\Http\Controllers\ProductController');

// display category men
Route::get('/men', [ProductController::class, 'ShowMen'])->name('ShowMen');

// display category women
Route::get('/women', [ProductController::class, 'ShowWomen'])->name('ShowWomen');

// display category soldes
Route::get('/soldes', [ProductController::class, 'ShowProductSolde'])->name('ShowProductSolde');

// displays information related to a single product
Route::get('/men/{id}', [ProductController::class, 'productDescribe'])->name('admins.ProductDescription');
Route::get('/women/{id}', [ProductController::class, 'productDescribe'])->name('admins.ProductDescription');
Route::post('/category.destroy/{id}', [ProductController::class, 'destroy'])->name('category.destroy');


/******
 ***** categories
 ******/

// display all categories
  Route::get('/category', [HomeController::class, 'getCategory'])->name('admins.category');

// form edite category
 Route::get('/editCategory/{id}', [HomeController::class, 'editCategory'])->name('admins.editCategory');

//  update category
 Route::post('/admins.updateCategory/{id}', [HomeController::class, 'updateCategory'])->name('admins.updateCategory');

// delete category
Route::post('/admins.destroyCategory/{id}', [HomeController::class, 'destroyCategory'])->name('admins.destroyCategory');


// create category
Route::get('/createCategory', [HomeController::class, 'createCategory'])->name('admins.createCategory');

// store data of the categories
Route::patch('/storeCategory', [HomeController::class, 'storeCategory'])->name('admins.storeCategory');



