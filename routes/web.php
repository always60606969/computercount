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
Route::get('/computercount','countController@count');
Route::get('/computercount/add','countController@addcomputer');
Route::post('/computercount/store','addController@store');
Route::post('/computercount/update', 'addController@update');
Route::post('/computercount/delete', 'addController@delete');
// Main table
Route::get('/getDataTable','addController@getDataTable');
// td_programms table
Route::get('/getDataTable2','addController@getDataTable2');
