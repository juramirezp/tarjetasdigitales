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

Route::get('/home', 'HomeController@index');

Route::get('institution/create', [
	'uses'=>'CreateInstitutionController@create',
	'as'=>'institution.create',
]);

Route::post('institution/create', [
	'uses'=>'CreateInstitutionController@store',
	'as'=>'institution.store',
]);
