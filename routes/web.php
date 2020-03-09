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
    
    //users
    Route::get('/','adminController@index')->name('dashboard');
    Route::get('/userCreate','adminController@create')->name('admin.createUserForm');
    Route::post('/userCreate','adminController@store')->name('admin.createUser');
    Route::get('/userList','adminController@showList')->name('admin.userlist');
    Route::get('/userList/delete/{user_id}','adminController@delete')->name('admin.userDelete');
    Route::get('/userList/edit/{user_id}','adminController@edit')->name('admin.userEdit');
    Route::post('/userList/edit/{user_id}','adminController@update')->name('admin.userUpdate');
    
    //books
    Route::get('/','adminController@index')->name('dashboard');
    Route::get('/bookCreate','adminController@create')->name('admin.createBookForm');
    Route::post('/bookCreate','adminController@store')->name('admin.createBook');
    Route::get('/bookList','adminController@showList')->name('admin.bookList');
    Route::get('/bookList/delete/{book_id}','adminController@delete')->name('admin.bookDelete');
    Route::get('/bookList/edit/{book_id}','adminController@edit')->name('admin.bookEdit');
    Route::post('/bookList/edit/{book_id}','adminController@update')->name('admin.bookUpdate');

});