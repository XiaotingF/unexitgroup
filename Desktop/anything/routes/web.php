<?php
Route::get('/', 'PostsController@index')->name('home');
Route::get('/about', 'PostsController@about');
Route::get('/contact', 'PostsController@contact');
Route::get('/answer', 'PostsController@answer');
Route::get('/register', 'PostsController@register');
Route::post('/register', 'PostsController@store');


Route::get('/home1', 'PostsController@home1');
Route::get('/login','PostsController@login');

Route::get('/logout','PostsController@logout');


Route::get('/about_b4login','PostsController@aboutb4');
Route::get('/contact_b4login','PostsController@contactb4');
Route::get('/answer_b4login','PostsController@answerb4');


Route::get('/preference', 'PostsController@preference')->name('preference');
Route::get('/profile', 'PostsController@profile');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
