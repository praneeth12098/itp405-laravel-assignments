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
    return redirect('/genres');
});


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::middleware(['protected'])->group(function () {
	Route::get('/profile', 'AdminController@index');

	Route::get('/invoices', 'InvoicesController@index');
	Route::get('/invoices/{id}', 'InvoicesController@show');

	Route::get('/settings', 'SettingsController@index');
	Route::post('/settings', 'SettingsController@update');

	Route::get('/phpinfo', function() {
		echo phpinfo();
	});
});

Route::middleware(['maintenance'])->group(function () {
	// Route::get('/maintenance', 'MaintenanceController@index');
	// Route::get('/settings', 'SettingsController@index');
	// Route::post('/settings/{id}', 'SettingsController@update');
	Route::get('/signup', 'SignupController@index');
	Route::post('/signup', 'SignupController@signup');
	Route::get('/genres', 'GenresController@index');
	Route::get('/tracks', 'TracksController@showDetails');
	Route::get('/playlists', 'PlaylistsController@index');
	Route::get('/playlists/new', 'PlaylistsController@create');
	Route::get('/playlists/{id}', 'PlaylistsController@show');
	Route::post('/playlists', 'PlaylistsController@store');
	Route::post('/editplaylists', 'PlaylistsController@edit');
	Route::get('/playlists/{id}/edit', 'PlaylistsController@showEdit');
	Route::get('/playlists/{id}/delete', 'PlaylistsController@delete');
});