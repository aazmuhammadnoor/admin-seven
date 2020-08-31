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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Backend route here
 */
Route::group([ 'prefix' => 'admin'], function(){

	Route::get('/', 'Admin\TemplateController@dashboard')->name('template.dashboard');
	Route::get('/template', 'Admin\TemplateController@dashboard')->name('template.dashboard');
	Route::get('/template/form', 'Admin\TemplateController@form')->name('template.form');
	Route::get('/template/table', 'Admin\TemplateController@table')->name('template.table');
	Route::get('/template/blank', 'Admin\TemplateController@blank')->name('template.blank');
	Route::get('/theming', 'Admin\ThemingController@index')->name('theming');

	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('backend.login');
});
