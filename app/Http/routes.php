<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'VoteController@getindex');
Route::post('/', 'VoteController@postindex');
Route::get('login', 'UserController@getlogin');
Route::post('login', 'UserController@postlogin');
Route::get('logout', 'UserController@getlogout');
Route::get('voted', 'UserController@getdisableaccount');
Route::get('score', 'ScoreController@getscore');