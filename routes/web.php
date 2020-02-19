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

// Route::get('/clients', 'ClientsController@index')->name('client.index');
Route::get('/clients', 'Admin\ClientController@index');
Route::get('/client/{id}', 'Admin\ClientController@show');

Route::get('/echanges', 'Admin\EchangeController@index');

Route::get('/echange/create', 'Admin\EchangeController@create');
//Route::post('/echange/create', 'Admin\EchangeController@create');

// Route::post('/echange/create', function () {
//     return 'formulaire recu '. request('maliste');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


