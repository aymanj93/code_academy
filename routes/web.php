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

Route::get('/', 'PagesController@index');

Route::prefix('admin')->group(function(){
    route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
Auth::routes();
Route::resource('category' ,'CategoryController');

Route::get('/dashboard', 'CategoryController@home');



