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

Route::get('/formulaire', function () {
    return view('formulaire');
});

Route::resource('/', 'FormsController');


 /*$utilisateur =  App\user_mahoney;
    $utilisateur->firstname = request('firstname');
    $utilisateur->lastname = request('lastname');
    $utilisateur->birth = request('birth');
    $utilisateur->nationnality = request('nationnality');
    $utilisateur->why_survey = request('why_survey');
    $utilisateur->save();*/