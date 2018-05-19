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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/registra-reserva', function () {
    return view('registra-reserva');
})->name('registra-reserva');

Route::get('/inclui-item-reserva', function () {
    return view('inclui-item-reserva');
})->name('inclui-item-reserva');

Route::get('/consulta-item-reserva', function () {
    return view('consulta-item-reserva');
})->name('consulta-item-reserva');

Route::get('/consulta-reserva', 'ReservaController@consulta')->name('consulta-reserva');

Route::post('/confirma-reserva', 'ReservaController@registra')->name('confirma-reserva');

Route::get('/registra-item-reserva', 'ReservaController@inclui_item')->name('registra-item-reserva');
//Route::get('/registra-item-reserva', 'ReservaController@inclui_item')->name('registra-item-reserva');

Route::get('/exibe-item-reserva', 'ReservaController@exibe_item_reserva')->name('exibe-item-reserva');






