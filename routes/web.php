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

Route::group(['prefix'=>'admin','namespace'=>'admin'],function (){
    Route::get('/','adminController@index');
    Route::get('/userlist','adminController@showList')->name('admin.userlist');
    Route::get('/user','adminController@create')->name('admin.createUserForm');
    Route::post('/user','adminController@store')->name('admin.createUser');
    Route::get('/user/{$user_id}','adminController@delete')->name('admin.userDelete');
//    Route::get('/user','adminController@edit')->name('admin.userEdit');

});