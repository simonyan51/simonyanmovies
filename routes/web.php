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

Route::get("/admin", "Admin\AdminController@index");

Route::get("/admin/users", "Admin\UsersController@index");

Route::get("/admin/users/{id}/delete", "Admin\UsersController@delete");

Route::get("/admin/movies", "Admin\MoviesController@index");

Route::get("/admin/movies/add", "Admin\MoviesController@addIndex");

Route::post("/admin/movies/add/add_movie", "Admin\MoviesController@add");

Route::get("/admin/movies/{id}/detail", "Admin\MoviesController@detail");

Route::get("/admin/movies/{id}/edit", "Admin\MoviesController@editIndex");
Route::post("/admin/movies/{id}/edit/edit_movie", "Admin\MoviesController@edit");


Route::get("/admin/movies/{id}/delete", "Admin\MoviesController@delete");

Route::get('{path?}', 'ApplicationController@runApp');
