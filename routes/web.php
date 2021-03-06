<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index');

Route::get('/games/{game}', 'GameController@show');

//--------------------------------------------------------------------------
//Authorization Routes

Route::get('login', 'AuthorizationController@index');

Route::post('login', 'AuthorizationController@login');

Route::get('logout', 'AuthorizationController@logout');

Route::get('/register', 'AuthorizationController@register');

Route::post('/validate', 'AuthorizationController@validate');

//--------------------------------------------------------------------------
//Store Routes

Route::get('store', 'StoreController@index');

//--------------------------------------------------------------------------
//User Routes

Route::get('users/{user}', 'UserController@index');

//--------------------------------------------------------------------------
//Game Routes

Route::get ('create', 'GameController@create');
