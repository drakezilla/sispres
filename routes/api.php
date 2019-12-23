<?php

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */
Route::get('clientes', 'ClienteController@getAllClientes');
Route::get('clientes/{id}', 'ClienteController@showCliente');
Route::post('clientes', 'ClienteController@createCliente');

Route::get('gestores', 'GestorController@getAllGestores');
Route::get('gestores/{id}', 'GestorController@showGestor');
Route::post('gestores', 'GestorController@createGestor');

Route::get('solicitudes', 'SolicitudController@getAllSolicitudes');
Route::get('solicitudes/{id}', 'SolicitudController@showSolicitud');
Route::post('solicitudes', 'SolicitudController@createSolicitud');