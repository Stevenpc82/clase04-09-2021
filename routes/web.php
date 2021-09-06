<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Controller;

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




Route::redirect('/','companies');
//Rutas Companies-------------------------------------------------------------------------------------------------------
Route::get('companies',[CompaniesController::class, 'index'])->name('companies.index');
Route::get('companies/create',[CompaniesController::class, 'create'])->name('companies.create');


Route::post('companies',[CompaniesController::class, 'store'])->name('companies.store');
Route::get('companies/{id}',[CompaniesController::class, 'show'])->name('companies.show');
Route::delete('companies/{id}',[CompaniesController::class, 'destroy'])->name('companies.destroy');
Route::get('companies/edit/{id}',[CompaniesController::class, 'edit'])->name('companies.edit');
Route::put('companies/{id}',[CompaniesController::class, 'update'])->name('companies.update');

//Rutas Products--------------------------------------------------------------------------------------------------------
Route::get('products',[ProductsController::class, 'index'])->name('products.index');
Route::get('products/create',[ProductsController::class,'create'])->name('products.create');


Route::post('products',[ProductsController::class, 'store'])->name('products.store');
Route::get('products/{id}',[ProductsController::class, 'show'])->name('products.show');
Route::delete('products/{id}',[ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('products/edit/{id}',[ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/{id}',[ProductsController::class, 'update'])->name('products.update');
