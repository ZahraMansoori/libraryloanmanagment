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
    Route::get('/','userController@index')->name('dashboard');
    Route::get('/userCreate','userController@create')->name('admin.createUserForm');
    Route::post('/userCreate','userController@store')->name('admin.createUser');
    Route::get('/userList','userController@showList')->name('admin.userlist');
    Route::get('/userList/delete/{user_id}','userController@delete')->name('admin.userDelete');
    Route::get('/userList/edit/{user_id}','userController@edit')->name('admin.userEdit');
    Route::post('/userList/edit/{user_id}','userController@update')->name('admin.userUpdate');
    Route::get('/userLoan/{user_id}','bookController@showBookList')->name('admin.loanControl');
    
    //books
    Route::get('/','userController@index')->name('dashboard');
    Route::get('/bookCreate','bookController@create')->name('admin.createBookForm');
    Route::post('/bookCreate','bookController@store')->name('admin.createBook');
    Route::get('/bookList','bookController@showList')->name('admin.bookList');
    Route::get('/bookList/delete/{book_id}','bookController@delete')->name('admin.bookDelete');
    Route::get('/bookList/edit/{book_id}','bookController@edit')->name('admin.bookEdit');
    Route::post('/bookList/edit/{book_id}','bookController@update')->name('admin.bookUpdate');

});