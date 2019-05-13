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

Route::resource('ajax-crud', 'AjaxController');

// Route::get('/grocery', function (){
// 	return view('grocery');
// });
// Route::get('/grocery/mostra', 'GroceryController@index')->name('mostra');
// Route::post('/grocery/post', 'GroceryController@store')->name('crea');
// Route::delete('/grocery/esborra/{id}', 'GroceryController@destroy')->name('esborra');