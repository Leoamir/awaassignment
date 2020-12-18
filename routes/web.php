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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@post');

Route::post('submit','PostController@savepost');

Route::get('/view','PostController@view');

Route::get('/viewposts','PostController@viewposts');


Route::get('/update/{id}','PostController@update');

Route::post('/update/{id}','PostController@save');


Route::get('/click_delete/{id}','PostController@delete_function');

Route::get('/click_update/{id}','PostController@update_function');
