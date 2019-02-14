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



Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/projects', 'PagesController@projects')->name('projects');

Route::get('/education', 'PagesController@education')->name('education');

Route::get('/resume', 'PagesController@resume')->name('resume');



Route::group(['prefix' => '/NHL'], function () {

	Route::get('/home', 'HockeyController@home')->name('hockey.home');
	Route::get('/team/{teamName}/{teamId}', 'HockeyController@team')->name('hockey.team');
	Route::get('/team/{teamName}/{playerId}', 'HockeyController@player')->name('hockey.player');

});







