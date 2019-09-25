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

// dashboard

Route::get('/dashboard', 'DashboardController@show_dashboard')->name('show_dashboard_page');

Route::get('/dashboardIndex', 'DashboardController@show_dashboard_index')->name('show_dashboard_index_page');

Route::get('/dashboardAbout', 'DashboardController@show_dashboard_about')->name('show_dashboard_about_page');

Route::get('/dashboardWork', 'DashboardController@show_dashboard_work')->name('show_dashboard_work_page');

Route::get('/dashboardProject', 'DashboardController@show_dashboard_project')->name('show_dashboard_project_page');

Route::get('/dashboardService', 'DashboardController@show_dashboard_service')->name('show_dashboard_service_page');

Route::get('/dashboardTestimony', 'DashboardController@show_dashboard_testimony')->name('show_dashboard_testimony_page');

Route::get('/dashboardContact', 'DashboardController@show_dashboard_contact')->name('show_dashboard_contact_page');

Route::get('/dashboardUser/filter={type}', 'DashboardController@show_dashboard_user')->name('show_dashboard_user_page');

// index

Route::post('/editImage' , 'IndexController@editImage')->name('edit_image');

Route::post('/addImage' , 'IndexController@addImage')->name('add_image');

// project

Route::post('/editProject', 'ProjectController@editProject')->name('edit_project');

Route::post('/addProject', 'ProjectController@addProject')->name('add_project');

// services

Route::post('/editService' , 'ServiceController@editService')->name('edit_service');

Route::post('/addService' , 'ServiceController@addService')->name('add_service');

// testimony

Route::post('/editTestimony', 'TestimonyController@editTestimony')->name('edit_testimony');

Route::post('/addTestimony', 'TestimonyController@addTestimony')->name('add_testimony');

// user

Route::post('/addUser', 'UserController@addUser')->name('add_user');

Route::post('/editUser', 'UserController@editUser')->name('edit_user');



Route::get('/form' , 'PagesController@form_valid')->name('form_valid');

Route::post('/formValidate' , 'PagesController@validate_form')->name('validate_form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
