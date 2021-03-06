<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "PaginasController@home");

Route::get('/messages/{message}', "MessagesController@show");

Route::post('/messages/create', 'MessagesController@create')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/{username}', 'UserController@show');

Route::post('/{username}/follow', 'UserController@follow');

Route::post('/{username}/unfollow', 'UserController@unfollow');

Route::get('/{username}/follows', "UserController@follows");

Route::get('/{username}/followers', "UserController@followers");
