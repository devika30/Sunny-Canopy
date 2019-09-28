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
<<<<<<< HEAD
Route::resource('/room','BookingController', [
=======
Route::get('/room','PagesController@room');
Route::resource('/rooms','RoomsController');

Route::resource('posts','PostsController', [
    'names' => [
        'index' => 'posts.index',
        'create' => 'posts.create',
        'show' => 'posts.show',
        'store' => 'posts.store',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy'    
    ]
]);
Route::resource('/book','BookingController', [
>>>>>>> 94ae53d9cb95f113458c30497c500a8842693338
    'names' => [
        'index'=> 'room.index',
        'store'=> 'room.store',
    ]
]);

