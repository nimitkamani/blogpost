<?php
use App\Task;

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::post('/posts/update/{post}', 'PostsController@update');

Route::post('/posts/{post}', 'PostsController@destroy');



// Task Controller
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


