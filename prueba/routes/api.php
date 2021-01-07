<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
/*GENERO*/
Route::get('genres', 'GenresController@index');
Route::get('genres/{genre}', 'GenresController@show');
Route::post('genres', 'GenresController@store');
Route::put('genres/{genre}', 'GenresController@update');
Route::delete('genres/{genre}', 'GenresController@delete');

/*MOVIE*/

Route::get('movies', 'MoviesController@index');
Route::get('movies/{movie}', 'MoviesController@show');
Route::post('movies', 'MoviesController@store');
Route::put('movies/{movie}', 'MoviesController@update');
Route::delete('movies/{movie}', 'MoviesController@delete');

/*USUARIO*/

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');

/*TODAS LAS PELICULAS DE UN GENERO EN ESPECIFICO*/
Route::get('genres', 'GeneroEspecificoController@index');
Route::get('genres/{genre}', 'GeneroEspecificoController@show');

/*GENEROS FAVORITOS DEL USUARIO*/
Route::get('genres', 'GeneroEspecificoController@index');
Route::get('genres/{genre}', 'GeneroEspecificoController@show');


