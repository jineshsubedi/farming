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

// Route::get('/', function () {
//     return view('theme.index');
// });

Route::get('/', 'Theme\ThemeController@index');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth']], function(){

	Route::get('/setting', 'HomeController@setting')->name('setting');
	Route::post('/setting/update', 'HomeController@updateSetting')->name('updateSetting');


	Route::resource('/vendor', 'Admin\VendorController');

	Route::get('/vendor/myOrder/{id}', 'Admin\VendorController@indexOrder')->name('vendor_order.index');
	Route::get('/vendor/myOrder/{id}/create', 'Admin\VendorController@createOrder')->name('vendor_order.create');
	Route::post('/vendor/myOrder/save', 'Admin\VendorController@saveOrder')->name('vendor_order.save');
	Route::delete('/vendor/myOrder/{id}/delete', 'Admin\VendorController@deleteOrder')->name('vendor_order.delete');


	Route::resource('/blog', 'Admin\BlogController');

	Route::resource('/user', 'Admin\UserController');

	Route::resource('/customer', 'Admin\CustomerController');
});
