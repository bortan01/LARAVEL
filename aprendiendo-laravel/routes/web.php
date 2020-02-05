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

Route::get('/mostrar-fecha', function(){
    $titulo = 'este es el titulo';
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo?}', function($titulo ='no se a escribido titulo'){

    return view('pelicula', array(
        'titulo' => $titulo
    ));
});

Route::get('/listado-peliculas', function(){
  $titulo = 'este es el titulo de peliculas';
    return view('peliculas.listado-peliculas')->with('titulo',$titulo);
});