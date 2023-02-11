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

Route::get('/','\App\Http\Controllers\MainController@index')->name('index');
Route::post('/','\App\Http\Controllers\MainController@check')->name('check');
Route::get('/restart','\App\Http\Controllers\MainController@restart')->name('restart');
Route::resource('profiles', \App\Http\Controllers\ProfileController::class)->only([
    'edit', 'update','index'
]);
Route::get('deliveries/create/{profile}','\App\Http\Controllers\DeliveryController@create')->name('delivery.create');
Route::post('deliveries/create','\App\Http\Controllers\DeliveryController@store')->name('delivery.store');
Auth::routes();



