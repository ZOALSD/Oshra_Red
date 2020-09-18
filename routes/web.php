<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'Lang'], function () {

Route::get('/', 'front\HomeController@index');
Route::get('Our_Work', 'front\OurWorkController@index')->name('OurWork');
Route::get('cause/{id}', 'front\OurWorkController@show')->name('cause');
Route::get('blogs', 'front\BlogsController@index')->name('BlogBage');//
Route::get('blog/{id}', 'front\BlogsController@show')->name('blog');

Route::get('AboutUs' ,'front\AboutUsController@index')->name('about');
Route::get('Done' ,'front\DoneController@index')->name('Done');//

});