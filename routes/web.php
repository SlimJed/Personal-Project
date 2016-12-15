<?php

Route::group(['middleware' => ['web']], function () {
	Route::post('/cards', 'CardsController@store');


	Auth::routes();

	Route::get('/cards','CardsController@index');
	Route::get('/cards/{card}','CardsController@show');
	Route::post('cards/{card}/notes','NotesController@store');
	Route::get('/notes/{note}/edit','NotesController@edit');
	Route::patch ('/notes/{note}', 'NotesController@update');
	Route::delete('/notes/{note}', 'NotesController@destroy');


	Route::get('/', 'PagesController@welcome');//welcome page to the site
	Route::get('/welcome', 'PagesController@welcome');//welcome page to the site
	Route::get('/home', 'HomeController@index');//homepage after registering
	Route::get('/about', 'PagesController@about');
	Route::get('/career','PagesController@career');
	Route::get('/blog', 'PagesController@blog');
	Route::get('/projects', 'PagesController@projects');
	Route::get('/social', 'PagesController@social');		

	Route::get('/flyers', 'FlyersController@index');
	Route::resource('flyers', 'FlyersController');

	Route::get('{Zip}/{street}', 'FlyersController@show');
	Route::post('{Zip}/{street}/photos', 'FlyersController@addPhoto');
});


