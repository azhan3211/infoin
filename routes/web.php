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

Route::get('/home', 'HomeController@index')->name('home');

//category
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/show/{id}', 'CategoryController@show');
Route::post('/categories/store', 'CategoryController@store');

//event
Route::get('/event/show/{id}', 'EventController@show');
Route::get('/event', 'EventController@index');
Route::post('/event/store', 'EventController@store');

//institution
Route::get('/institution/show/{id}', 'InstitutionsController@show');
Route::get('/institution', 'InstitutionsController@index');
Route::post('/institution/store', 'InstitutionsController@store');

//organizer
Route::get('/organizer', 'OrganizersController@index');
Route::get('/organizer/show/{id}', 'OrganizersController@show');
Route::post('/organizer/store', 'OrganizersController@store');

//userinfoin
Route::get('/userinfoin', 'UsersInfoinController@index');
Route::get('/userinfoin/show/{id}', 'UsersInfoinController@show');
Route::post('/userinfoin/store', 'UsersInfoinController@store');
