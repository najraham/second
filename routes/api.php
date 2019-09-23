<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Message

Route::post('/message', 'MessageController@send');

Route::post('/editIndex', 'IndexController@editIndex');

Route::get('/deleteImage/{i}', 'DashboardController@deleteImage');

Route::get('/deleteProject/{id}', 'ProjectController@deleteProject');

Route::get('/deleteService/{id}', 'ServiceController@deleteService');

// Route::post('/saveImage', 'DashboardController@saveImage');

