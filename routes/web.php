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

Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contacts', 'PageController@contacts')->name('contacts');


/*
 C create
 R read
 U update
 D delete
 */


Route::get('films', 'PostController@index')->name('films');
Route::get('films/create', 'PostController@create')->name('films.create');
Route::post('films', 'PostController@store')->name('films.store');
Route::get('films/{film}', 'PostController@show')->name('films.show');
Route::get('films/{film}/edit', 'PostController@edit')->name('films.edit');
Route::put('films/{film}', 'PostController@update')->name('films.update');
Route::delete('films/{film}', 'PostController@destroy')->name('films.delete');


