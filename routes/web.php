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

Route::get('livestream', function() {
	return view('livestream');
});

Route::get('individual-courses', function() {
	return view('courses.individual_courses');
});

Route::group(['prefix' => 'individual-courses'], function () {
	Route::get('adobe-photoshop', function() {
    	return view('courses.individual_courses.adobe_photoshop');
    });
    Route::get('business-analytics', function() {
    	return view('courses.individual_courses.business_analytics');
    });
});

Route::group(['prefix' => 'individual-courses/adobe-photoshop'], function () {
	Route::get('basic', function() {
    	return view('courses.individual_courses.adobe_photoshop.basics');
    })->name('adobe_photoshop_basics');
});
