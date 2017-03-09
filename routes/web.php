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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('individual-courses', function() {
	return view('courses.individual_courses');
});

Route::group(['prefix' => 'individual-courses'], function () {
    Route::get('business-analytics', function() {
    	return view('business_analytics');
    });
});
