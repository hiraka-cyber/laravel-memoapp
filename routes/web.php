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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\MemoController@index')->name('home');

Route::get('/submit/{id?}','App\Http\Controllers\MemoController@show')->name('submit');
Route::post('/submit/{id?}', 'App\Http\Controllers\MemoController@create')->name('submit');
Route::get('/delete/{id}','App\Http\Controllers\MemoController@delete')->name('delete');
