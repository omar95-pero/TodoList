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

Route::get('/','App\Http\Controllers\TodoController@index');
Route::post('/create_todo','App\Http\Controllers\TodoController@store')->name('todoStore');
Route::get('/update_status/{id}','App\Http\Controllers\TodoController@update')->name('Status.Update');
Route::get('/delete_task/{id}','App\Http\Controllers\TodoController@delete')->name('Task.Delete');
