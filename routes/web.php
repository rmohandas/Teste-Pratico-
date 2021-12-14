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

Route::get('/veiculos/novo', 'VeiculosController@create')->middleware('auth');
Route::post('/veiculos/novo', 'VeiculosController@store')->name('registrar_veiculo')->middleware('auth');

Route::get('veiculos/ver/{id}', 'VeiculosController@show')->middleware('auth');

Route::get('/veiculos/editar/{id}', 'VeiculosController@edit')->middleware('auth');
Route::post('/veiculos/editar/{id}', 'VeiculosController@update')->name('alterar_veiculo')->middleware('auth');

Route::get('/veiculos/excluir/{id}', 'VeiculosController@delete')->middleware('auth');
Route::get('/veiculos/excluir/{id}', 'VeiculosController@destroy')->name('excluir_veiculo')->middleware('auth');

Auth::routes();
Route::get('/home', 'VeiculosController@index')->name('home');

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
    //Authentication Rotes
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    //Password Reset
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('/home', 'VeiculosController@index')->name('home');
});

Auth::routes();

Route::get('/home', 'VeiculosController@index')->name('home');

Auth::routes();

Route::get('/home', 'VeiculosController@index')->name('home');
