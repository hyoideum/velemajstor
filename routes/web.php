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

Route::middleware('auth')->group(function () {

    Route::get('/profile', 'ProfileController@profile')->name('profile');

    Route::get('/edit_profile', 'ProfileController@edit_profile')->name('edit_profile');
    Route::post('/update_profile', 'ProfileController@update_profile');

    Route::get('/delete_profile', 'ProfileController@delete_profile')->name('delete_profile');

});

Route::middleware('role:majstor')->group(function () {

    Route::get('/post_job', 'JobController@show_job_form')->name('post_job');
    Route::post('/post_job', 'JobController@create');

    Route::get('/my_jobs/{id}', 'JobController@my_jobs')->name('my_jobs');

    Route::get('/edit_job/{id}', 'JobController@edit')->name('edit_job');
    Route::post('/edit_job/{id}', 'JobController@update');

});

Route::get('/delete_job/{id}', 'JobController@delete')->name('delete_job')->middleware('role:admin,majstor');


Route::get('show_new_jobs', 'AdminController@show_new_jobs')->name('show_new_jobs');
Route::get('approve_job/{id}', 'AdminController@approve_job')->name('approve_job');

Route::get('categories', 'AdminController@categories')->name('categories');

Route::get('/new_category', 'AdminController@new_category')->name('new_category');
Route::post('/new_category', 'AdminController@add_category');

Route::get('users', 'AdminController@users')->name('users');

Route::get('deactivate_user/{id}', 'AdminController@deactivate_user')->name('deactivate_user');
