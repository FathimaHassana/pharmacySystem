<?php

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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/inventories', '\App\Http\Controllers\InventoryController@index')->name('inventories.index');
Route::get('/inventories/create', '\App\Http\Controllers\InventoryController@create')->name('inventories.create');
Route::post('/inventories', '\App\Http\Controllers\InventoryController@store')->name('inventories.store');
Route::get('/inventories/{inventory}/edit', '\App\Http\Controllers\InventoryController@edit')->name('inventories.edit');
Route::patch('/inventories/{inventory}', '\App\Http\Controllers\InventoryController@update')->name('inventories.update');
Route::delete('/inventories/{inventory}', '\App\Http\Controllers\InventoryController@destroy')->name('inventories.destroy');


Route::get('/customers', '\App\Http\Controllers\CustomerController@index')->name('customers.index');
Route::get('/customers/create', '\App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::post('/customers', '\App\Http\Controllers\CustomerController@store')->name('customers.store');
Route::get('/customers/{customer}/edit', '\App\Http\Controllers\CustomerController@edit')->name('customers.edit');
Route::patch('/customers/{customer}', '\App\Http\Controllers\CustomerController@update')->name('customers.update');
Route::delete('/customers/{customer}', '\App\Http\Controllers\CustomerController@destroy')->name('customers.destroy');
