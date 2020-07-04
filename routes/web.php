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

Route::get('/pertanyaan', 'QuestionController@index')->name('questions.index');
Route::get('/pertanyaan/create', 'QuestionController@create')->name('questions.create');
Route::post('/pertanyaan/store', 'QuestionController@store')->name('questions.store');
Route::delete('/pertanyaan/{id}', 'QuestionController@delete')->name('questions.delete');
Route::put('/pertanyaan/{id}', 'QuestionController@update')->name('questions.update');
Route::get('/pertanyaan/{id}', 'QuestionController@edit')->name('questions.edit');
