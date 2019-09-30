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

Route::get('/dashboard','DashboardController@index');
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/services','PagesController@services');
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
Route::resource('/room','BookingController', [
    'names' => [
        'index'=> 'room.index',
        'create'=> 'room.create',
        'store'=> 'room.store',
        'edit'=>'room.edit',
        'show'=>'room.show',
        'destroy'=>'room.destroy'
    ]
]);

