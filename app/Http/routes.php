<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Visitante
Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@getIndex'
]);

Route::get('entrar', 'HomeController@getEntrar');
Route::post('entrar', 'HomeController@postEntrar');
Route::get('sair', 'HomeController@getSair');

// Verifica se o usuário está logado
Route::group(['middleware' => 'auth'], function()
{
    // Rota de artigos
    Route::controller('artigos', 'ArtigosController');

    // Rotas do administrador
    Route::group(['middleware' => 'auth.perfil:admin'], function()
    {
        Route::controller('usuarios', 'UsuariosController');
    });
});