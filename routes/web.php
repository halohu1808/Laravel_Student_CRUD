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


Route::get('/', function () {
    return view('welcome');
});



Route::get('list','lophocController@all')->name('lophoc.all');
//create
Route::get('create','lophocController@create')->name('lophoc.create');
Route::post('store','lophocController@store')->name('lophoc.store');
//update
Route::get('edit/{id}','lophocController@edit')->name('lophoc.edit');
Route::post('update','lophocController@update')->name('lophoc.update');

//delete
Route::get('delete/{id}','lophocController@delete')->name('lophoc.delete');
