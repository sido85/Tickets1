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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Tickets:

Route::get('ticket/nouveau','TicketController@create');

Route::post('ticket/enregistrer','TicketController@store');

Route::get('ticket/{id}/consulter','TicketController@consulter');

Route::get('ticket/{id}/show','TicketController@show');

// Traitements:

Route::get('ticket/{id}/traiter','TraitementController@create');
Route::post('traitement/enregistrer','TraitementController@store');
