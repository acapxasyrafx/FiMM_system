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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Clients management
 * */
Route::prefix('/clients')->group(function () {
    Route::get('', 'ClientsController@index');
    Route::get('{client}', 'ClientsController@show');
    Route::post('store', 'ClientsController@store');
    Route::patch('{client}', 'ClientsController@update');
    Route::post('destroy', 'ClientsController@destroyMass');
    Route::delete('{client}/destroy', 'ClientsController@destroy');
});

/*
 * Current user
 * */
Route::prefix('/user')->group(function () {
    Route::get('', 'CurrentUserController@show');
    Route::patch('', 'CurrentUserController@update');
    Route::patch('/password', 'CurrentUserController@updatePassword');
});

Route::prefix('/system')->group(function(){
    Route::get('','SystemController@index')->name('system.index');
});

Route::prefix('/consultant')->group(function() {
    Route::get('','ConsultantController@index')->name('consultant.list');
    Route::get('/detail/{id}', 'ConsultantController@show')->name('consultant.show');
    Route::get('/register','ConsultantController@create')->name('consultant.create');
    Route::post('/register','ConsultantController@store')->name('consultant.store');
    Route::patch('/approve/{id}','ConsultantController@approve')->name('consultant.approve');
    Route::patch('/reject/{id}','ConsultantController@reject')->name('consultant.reject');
    Route::delete('/{id}/destroy','ConsultantController@destroy')->name('consultant.delete');
});

/*
 * File upload (e.g. avatar)
 * */
Route::post('/files/store', 'FilesController@store');
