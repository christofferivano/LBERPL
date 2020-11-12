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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'MovieController@userDashboard');

Route::group(['prefix' => 'movie', 'middleware' => 'auth'], function () {
    Route::get('/create', 'MovieController@displayCreateMoviePage')->name('movie.create');
    Route::post('/create', 'MovieController@createMovie')->name('movie.createpost');


    Route::get('/edit/{id}', 'MovieController@displayEditMoviePage')->name('movie.edit');
    Route::put('/edit/{id}', 'MovieController@editMovie')->name('movie.editput');

    Route::get('/delete/{id}', 'MovieController@displaydeleteMoviePage')->name('movie.deletepage');
    Route::delete('/delete/{id}', 'MovieController@deleteMovie')->name('movie.delete');

    Route::get('/', 'MovieController@displayUserMovie')->name('movie.index');
    Route::get('/{id}', 'MovieController@showMovie')->name('movie.show');
});