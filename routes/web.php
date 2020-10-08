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

// Route::get('/', 'AdminController@home');
Route::get('/computercount','countController@count')->middleware('auth');
Route::get('/computercount/users','countController@users');
Route::get('/getDataTable4','addController@getUserLogin');
Route::get('/computercount/add','countController@addcomputer');
Route::post('/computercount/store','addController@store');
Route::post('/computercount/store2','addController@store2');
Route::post('/computercount/store3','addController@store3');
Route::post('/computercount/update', 'addController@update');
Route::post('/computercount/update2', 'addController@update2');
Route::post('/computercount/update3', 'addController@update3');
Route::post('/computercount/delete', 'addController@delete');
Route::post('/computercount/delete2', 'addController@delete2');
Route::post('/computercount/delete3', 'addController@delete3');
Route::post('/computercount/delete12', 'addController@delete12');
Route::post('/compu/klklk', 'addController@storeUser');
// Main table
Route::get('/getDataTable','addController@getDataTable');
// td_programms table
Route::get('/getDataTable2','addController@getDataTable2');
// tb_change
Route::get('/getDataTable3', 'addController@getDataTable3');
Route::get('/test', 'test@test')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout2','countController@logout');

Route::post('/admin/new', 'AdminController@store');
