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

Route::get('search/autocomplete', 'FuncionarioController@autocomplete');

Route::get('/home', 'HomeController@index');
Route::resource('funcionarios', 'FuncionarioController');


Route::get('/autocomplete', [
    'as' => 'users.autocomplete',
    'uses' => 'FuncionarioController@autocomplete'

  ]);

Route::get('/search', [
    'as' => 'users.search',
    'uses' => 'FuncionarioController@search'

  ]);
