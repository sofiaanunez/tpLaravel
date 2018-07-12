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



Route::get('/', 'controladorIndex@headerIndex');

Route::get('/servicio', 'controladorServicios@listarServicios');

Route::get('/servicio/agregar', 'controladorServicios@agregarServicios');
Route::post('/servicio/agregar', 'controladorServicios@validarServicios');

Route::get('/servicio/editar/{id}', 'controladorServicios@editarServicios');
Route::post('/servicio/editar/{id}', 'controladorServicios@actualizarServicios');

Route::get('/login', 'controladorGeneral@login');

Route::get('/faq', 'controladorGeneral@faq');

Auth::routes();
