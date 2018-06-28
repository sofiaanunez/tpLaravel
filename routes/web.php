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

Route::get('/', 'HomeController@index');

Route::get('/index', 'controladorIndex@headerIndex');

Route::get('/servicio', 'controladorServicios@listarServicios');
Route::get('/servicio/agregar', 'controladorServicios@agregarServicios');

Route::get('/login', 'controladorGeneral@login');

Route::get('/faq', 'controladorGeneral@faq');
