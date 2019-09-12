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

Route::get('/', 'PagesController@show_index')->name('show_index_page');

Route::get('/about', 'PagesController@show_about')->name('show_about_page');

Route::get('/contact', 'PagesController@show_contact')->name('show_contact_page');

Route::get('/work', 'PagesController@show_work')->name('show_work_page');

Route::get('/singleWork', 'PagesController@show_single_work')->name('show_single_work_page');
