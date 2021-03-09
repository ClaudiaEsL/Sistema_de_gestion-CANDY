<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/main', function(){
    return view('main');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/panel', function(){
    return view('usuarios.panel');
});
Route::get('/usuarios/categoria', function(){
    return view('usuarios.categoria');
});
Route::get('/usuarios/productos', function(){
    return view('usuarios.productos');
});

Route::resource('usuarios', 'UserController');
