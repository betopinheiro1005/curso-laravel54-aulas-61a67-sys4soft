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

/* -----------------------------------------------------------------------*/

/* Aula 61 */

Route::get('/usuarios_login', 'usuariosController@ApresentarFormularioLogin');

/* -----------------------------------------------------------------------*/

/* Aula 63 */

Route::post('/fazer_login', 'usuariosController@FazerLogin');

/* -----------------------------------------------------------------------*/

/* Aula 66 */

// temp
Route::get('/inserir_usuario', 'usuariosController@InserirUsuario');

/* -----------------------------------------------------------------------*/

