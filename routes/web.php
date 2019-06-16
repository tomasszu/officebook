<?php

use App\message;
use App\management_post;

Route::get('/', function () {

   return view('main.welcome');
});

Route::get('/about',function()
{
   return view('main.about');
});

Route::get('/profile','profileController@index');

Route::get('/announcements','announcementsController@index');

Route::get('/messages','messagesController@index');

Route::get('/messages/{id}','messagesController@show');

Route::get('/forums','ForumController@index');

Route::get('/forums/create','ForumController@forumcreate');

Route::get('/forums/{id}','ForumController@show');

Route::get('/forums/{id}/create','ForumController@postcreate');

Route::post('/forums','ForumController@store_forum');

Route::post('/forums/{id}','ForumController@store_post');