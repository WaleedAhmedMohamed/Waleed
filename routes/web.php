<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\invoicesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();
Auth::routes(['register'=>false]);
//Route::get('/section/{id}', [invoicesController::class,'getProduct']);

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('dashboard',[HomeController::class,'index']);
Route::resource('sections', 'SectionsController');
Route::get('/section/{id}', [invoicesController::class,'getProduct']);

Route::resource('invoices', 'invoicesController');
Route::resource('products', 'ProductsController');

Route::get('page',[AdminControlle::class,'index']);


