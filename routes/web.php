<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return 'teste';
});

Route::group(['prefix' => 'funcionarios', 'as'=> 'funcionarios.'], function(){

	Route::get('index', 'funcionario@index');

	Route::get('/', 'funcionario@index');

	Route::get('novo', 'funcionario@novo');

	Route::get('lista', 'funcionario@lista');
});	

