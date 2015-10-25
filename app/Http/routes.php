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

Route::get('/',[
    'as' => 'home',
    "uses" => "HomeController@index"
]);


Route::get('/home', function () {
    return view('pages.home');
});

Route::get('events/create', [
    'as' => 'createEvent',
    "uses" => "EventsController@create"
]);

Route::get('events',[
    'as' => 'events',
    "uses" => "EventsController@index"
]);

Route::get('events/{id}', [
    'as' => 'showEvent',
    "uses" => "EventsController@show"
]);

Route::post('events', [
    'as' => 'postEvent',
    "uses" => "EventsController@store"
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Abouts routes...
Route::get('about', "AboutController@about");
Route::get('team', "AboutController@team");
