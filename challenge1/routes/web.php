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



Route::get('/', 'App\Http\Controllers\TodoController@index')->name('todo.lists');
Route::get('/lists', 'App\Http\Controllers\TodoController@show')->name('todo.lists');
Route::get('/create', 'App\Http\Controllers\TodoController@create')->name('todo.create');
Route::post('/store', 'App\Http\Controllers\TodoController@store')->name('todo.store');
Route::get('/edit/{data}', 'App\Http\Controllers\TodoController@edit')->name('todo.edit');
Route::put('/update/{data}', 'App\Http\Controllers\TodoController@update')->name('todo.update');
Route::get('/destroy/{data}', 'App\Http\Controllers\TodoController@destroy')->name('todo.destroy');
