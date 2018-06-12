<?php

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

Route::get('/', 'PageController@index')->name('index');
Route::get('/projet','PageController@projets')->name('projets');
Route::get('/projet/{projet}','PageController@voir')->name('voir');
Route::post('/contact', 'PageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/projets','ProjetController')->middleware('auth');