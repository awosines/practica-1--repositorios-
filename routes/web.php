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
/*Route::get('index', function () {
    return view('index');
});
Route::get('MiPrimerLayout', function () {
    return view('MiPrimerLayout');
});
Route::get('Inicio', function () {
    return view('Inicio');
});
Route::get('prueba', function () {
    return view('prueba');
});*/
//Rutas Materias
Route::resource('/HelloWorld', 'Materias\controllerMaterias');

Route::get('/helloworld2', 'Controller@index');

Route::get('/miprimerarray', '\Materias\controllerMaterias@getAlumnos');

Route::get('/Practica', 'controllerPracticas@index');