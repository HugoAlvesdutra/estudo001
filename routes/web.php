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
    return view('index');
});

Route::post('users/',['uses'=>'Admin\UsuarioController@login']);

Route::get('logout/',function(){
    return view('index');
});

Route::get('simulacao/',['uses'=>'Admin\UsuarioController@simulacao']);

Route::post('enviardados/',['uses'=>'Admin\UsuarioController@enviarDados']);

