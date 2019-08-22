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

Route::get('/usuario', function () {
    return view('usuario.create');
});

Route::get('/pase', function () {
    return view('estudiante.nota ');
});

Route::get('/estudi', function () {
    return view('estudiantes.nota');
});
Route::get('/estud', function () {
    return view('empleados.salario');
});
