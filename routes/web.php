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
Route::group(['middleware' => 'auth'], function(){
    
Route::get('/', 'HomeController@getHome');

/*Route::get('auth/login', function () {
    return view('auth.login');
});
Route::get('auth/logout', function () {
    return view('Logout usuario');
});*/

Route::get('catalog', 'CatalogController@getIndex')->name('catalog.index');
Route::get('catalog/show/{id}', 'CatalogController@getShow')->name('catalog.show');
Route::get('catalog/create', 'CatalogController@getCreate')->name('catalog.create');
Route::get('catalog/edit/{id}', 'CatalogController@getEdit')->name('catalog.edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
