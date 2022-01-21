<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/* Route::get('/series', [App\Http\Controllers\SeriesController::class, 'listarSeries']); */
Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');

Route::get('/atores', 'App\Http\Controllers\AtoresController@atores')->name('listar_atores');
Route::get('/atores/criar', 'App\Http\Controllers\AtoresController@create');
Route::post('/atores/criar', 'App\Http\Controllers\AtoresController@store')->name('criar_ator');
Route::delete('/atores/{id_atores}', 'App\Http\Controllers\AtoresController@destroy');


Route::get('/series', 'App\Http\Controllers\SeriesController@index')->name('listar_series');
Route::get('/series/criar', 'App\Http\Controllers\SeriesController@create')->name('form_criar_serie');
Route::post('series/criar', 'App\Http\Controllers\SeriesController@store');

Route::delete('/series/{id_series}', 'App\Http\Controllers\SeriesController@destroy');


