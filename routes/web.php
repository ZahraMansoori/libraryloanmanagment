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
    Route::get('/','adminController@index')->name('dashboard');
    Route::get('/userCreate','adminController@create')->name('admin.createUserForm');
    Route::post('/userCreate','adminController@store')->name('admin.createUser');
    Route::get('/userList','adminController@showList')->name('admin.userlist');
    Route::get('/userList/delete/{$user_id}','adminController@delete')->name('admin.userDelete');
//    Route::resource('/userList/delete', 'adminController',['only'=> ['index','create','store','showList']]);

    Route::get('/userList/edit/{$user_id}','adminController@edit')->name('admin.userEdit');
    Route::post('/userList/edit/{$user_id}','adminController@update')->name('admin.userUpdate');

});