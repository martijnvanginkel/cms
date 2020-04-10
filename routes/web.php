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

Route::get('/', 'PageController@index')->name('pages.index');
Route::get('/contact', 'PageController@contact')->name('pages.contact');
Route::get('/post/{id}', 'PageController@post')->name('pages.post');

Route::group(['middleware' => ['auth']], function () {

  Route::get('/home', 'PostController@index')->name('home');
  Route::get('/users', 'UserController@index')->name('users.index');
  Route::resource('posts', 'PostController');
  Route::resource('questions', 'QuestionController')->except('store');
});

Route::post('questions', 'QuestionController@store')->name('questions.store');

Auth::routes();
