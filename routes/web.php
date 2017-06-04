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

// Route::get('/', function () {return view('welcome');});
 
Route::get('/home', 'UsersController@index');

// UsersController
Route::get('/', 'UsersController@index')->name('home');

Route::get('/users', 'UsersController@listUsers');

Route::get('/users/{user?}', 'UsersController@show')->where('user', '[0-9]+');

// ProjectsController
// Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/new', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

// Route::get('/projects/show/{project}', 'ProjectsController@show');   // route model binding

// Route::get('/projects/{id?}/show', 'ProjectsController@show')->where('id', '[0-9]+');
Route::get('/projects/{id?}', 'ProjectsController@show')->where('id', '[0-9]+');

Route::get('/projects/edit/{id}', 'ProjectsController@edit');

Route::post('projects/update', 'ProjectsController@update');

Route::post('/projects/delete/{project}', 'ProjectsController@destroy');


// RegistrationController
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

// SessionsController
Route::get('/login', 'SessionsController@create')->name('login') ;

Route::post('login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

// TeamsController
Route::get('/teams/new', 'TeamsController@create');

Route::post('/teams/new', 'TeamsController@store');