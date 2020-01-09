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


Route::get('/', 'WelcomeController@index');
Route::get('/create', 'WelcomeController@create');
Route::post('/caffes', 'WelcomeController@store');
Route::get('/edit_caffe/{id}', 'WelcomeController@edit');
Route::patch('/{id}/caffesEdit', 'WelcomeController@update');
Route::delete('/{id}/delete', 'WelcomeController@destroy');
Route::post('/comment/{caffe_id}', 'WelcomeController@post_comment');

Route::get('/{id}/show', 'PriceController@show');
Route::get('/edit/{id}', 'PriceController@edit');
Route::patch('{id}/priceEdit/{caffe_id}', 'PriceController@update');
Route::get('create_product/{caffe_id}', 'PriceController@create');
Route::post('store_product/{id}', 'PriceController@store');
Route::delete('/{id}/delete_price', 'PriceController@destroy');
