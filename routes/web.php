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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/jobs', 'JobController@index')->name('jobs');

Route::get('/search', 'JobController@search')->name('search');

Route::get('/job/{id}', 'JobController@show')->name('show_job');

Route::get('/post_job', 'JobController@show_job_form')->name('post_job');
Route::post('/post_job', 'JobController@create');

Route::get('/edit_job/{id}', 'JobController@edit')->name('edit_job');
Route::post('/edit_job/{id}', 'JobController@update');

Route::get('/delete_job/{id}', 'JobController@delete')->name('delete_job');
