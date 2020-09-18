<?php

/*
|--------------------------------------------------------------------------
| Web Admin Panel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

app()->singleton('admin', function () {
		return 'admin';
	});

\L::Panel(app('admin'));/// Set Lang redirect to admin
\L::LangNonymous();// Run Route Lang 'namespace' => 'Admin',

Route::group(['prefix' => app('admin'), 'middleware' => 'Lang'], function () {

		Route::get('theme/{id}', 'Admin\Dashboard@theme');
		Route::group(['middleware' => 'admin_guest'], function () {

				Route::get('login', 'Admin\AdminAuthenticated@login_page');
				Route::post('login', 'Admin\AdminAuthenticated@login_post');

				Route::post('reset/password', 'Admin\AdminAuthenticated@reset_password');
				Route::get('password/reset/{token}', 'Admin\AdminAuthenticated@reset_password_final');
				Route::post('password/reset/{token}', 'Admin\AdminAuthenticated@reset_password_change');
			});
		/*
		|--------------------------------------------------------------------------
		| Web Routes
		|--------------------------------------------------------------------------
		| Do not delete any written comments in this file
		| These comments are related to the application (it)
		| If you want to delete it, do this after you have finished using the application
		| For any errors you may encounter, please go to this link and put your problem
		| phpanonymous.com/it/issues
		 */

		Route::group(['middleware' => 'admin:admin'], function () {
				//////// Admin Routes /* Start */ //////////////
				Route::get('/', 'Admin\Dashboard@home');
				Route::any('logout', 'Admin\AdminAuthenticated@logout');

				Route::get('account', 'Admin\AdminAuthenticated@account');
				Route::post('account', 'Admin\AdminAuthenticated@account_post');
				Route::resource('settings', 'Admin\Settings');

				Route::resource('addadmin','Admin\AddAdminController'); 
Route::post('addadmin/multi_delete','Admin\AddAdminController@multi_delete'); 
Route::PUT('homepage/{id}/edit','Admin\HomePageController@update')->name('Home.update'); 
Route::resource('homepage','Admin\HomePageController'); 
//Route::post('homepage/multi_delete','Admin\HomePageController@multi_delete'); 
				Route::resource('ourwork','Admin\OurWorkController'); 
Route::post('ourwork/multi_delete','Admin\OurWorkController@multi_delete'); 
				Route::resource('conutry','Admin\ConutryController'); 
Route::post('conutry/multi_delete','Admin\ConutryController@multi_delete'); 
				Route::resource('city','Admin\CityController'); 
Route::post('city/multi_delete','Admin\CityController@multi_delete'); 
				Route::resource('category','Admin\categoryController'); 
Route::post('category/multi_delete','Admin\categoryController@multi_delete'); 
				Route::resource('causes','Admin\CausesController'); 
Route::post('causes/multi_delete','Admin\CausesController@multi_delete'); 
				Route::resource('blogs','Admin\BlogsController'); 
Route::post('blogs/multi_delete','Admin\BlogsController@multi_delete'); 
				Route::resource('blogsbage','Admin\BlogsBageController'); 
Route::post('blogsbage/multi_delete','Admin\BlogsBageController@multi_delete'); 
				//////// Admin Routes /* End */ //////////////
			});

	});
