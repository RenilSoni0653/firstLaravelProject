<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/welcome');
});

//Home Route
Auth::routes();
Route::get('/home', 'ProfilesController@index')->name('home');

//Profile Routes
Route::get('/profile/{user}','ProfilesController@show')->name('profile.show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('post.edit');
Route::put('/profile/{user}','ProfilesController@update')->name('profile.update');

//Post Routes
Route::get('/post/create','PostController@create')->name('post.create');
Route::get('/post/{images}/edit','PostController@edit')->name('post.edit');
Route::post('/post','PostController@store')->name('post.store');
Route::post('/post/{post}','PostController@update')->name('post.update');
Route::delete('/post/{post}','PostController@destroy')->name('post.destroy');