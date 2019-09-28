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

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/blog','PagesController@blog');
Route::get('/contact','PagesController@contact');
Route::get('/services','PagesController@services');
Route::get('/room','PagesController@room');
Route::resource('/room','BookingController', [
    'names' => [
        'index'=> 'room.index',
        'store'=> 'room.store',
    ]
]);

