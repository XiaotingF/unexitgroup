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
Route::get('matches/{id}','PostsController@matches');
Route::get('/pending/{id}','PostsController@pending');
Route::get('/waiting/{id}','PostsController@waiting');
Route::get('/matched/{id}','PostsController@matched');
Route::get('/preference/{id}', 'PostsController@preference')->name('preference');


Route::get('/test', function(){
    return Auth::user()->test();
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile/{id}', 'ProfileController@index');
Route::post('/profile/{id}', 'ProfileController@update_avatar');
Route::post('/updatePreferences', 'PostsController@updatePreferences');
Route::get('/edit', 'ProfileController@edit');
Route::post('/request', 'PostsController@request');


Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('home');
    } else {
      $users['users'] = \App\User::all();
      return view('adminhome', $users);
    }
  });
});
