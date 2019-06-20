<?php

use App\message;
use App\management_post;


Route::get('/', function () {
   return view('main.welcome');
});

Route::get('/about','questionController@index');

Route::get('/profile','profileController@index');

Route::get('/announcements','announcementsController@index');

Route::post('/announcements/create','announcementsController@store');

Route::patch('/announcements/edit','announcementsController@patch');

Route::get('/messages','messagesController@index');

Route::post('/messages/send','messagesController@store');

Route::get('/messages/{id}','messagesController@show');

Route::get('/forums','ForumController@index');

Route::get('/forums/create','ForumController@forumcreate');

Route::get('/forums/{id}','ForumController@show');

Route::get('/forums/{id}/create','ForumController@postcreate');

Route::post('/about/question','questionController@store');

Route::post('/forums','ForumController@store_forum');

Route::post('/forums/{id}','ForumController@store_post');

Route::delete('/forums/post_destroy','ForumController@destroy_post');

Route::delete('/forums/forum_destroy','ForumController@destroy_forum');

Route::delete('/messages/{id}/delete','messagesController@destroy');

Route::get('/register','registrationController@create');

Route::post('/register','registrationController@store');

Route::get('/login','sessionsController@create')->name('login');

Route::post('/login','sessionsController@store');

Route::get('/logout','sessionsController@destroy');

Route::patch('/user_privilige_change','registrationController@update');

Route::get('/{id}', function ($id) {
   Lang::setlocale($id);
   return view('main.welcome');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
