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







Route::get('/' , 'FormulaireController@index')->name('formulaire.index');
Route::post('/formulaire' , 'FormulaireController@postForm')->name('formulaire.postForm');
route::get('/survey' , 'SurveyController@printSurvey')->name('survey.printSurvey');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/serviceinfo',  'ListresultController@index');


