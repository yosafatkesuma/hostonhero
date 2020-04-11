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

Route::resource('/', 'HomepageController')->except(['edit', 'destroy', 'update', 'create', 'show']);


Auth::routes();
Route::get('/{show}', 'HomepageController@show')->name('show');
Route::get('/img/{showImage}', 'HomepageController@showImage')->name('showImage');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::resource('menu', 'Dashboard\MenuController');
    Route::resource('blog', 'Dashboard\BlogController');
    Route::resource('contact', 'Dashboard\ContactController')->except(['store', 'create', 'update', 'destroy', 'edit', 'show']);
});