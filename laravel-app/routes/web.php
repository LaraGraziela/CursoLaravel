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

use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 'ProdutosController@index');

Route::get('/produtos/create', function () {
    return view('produtos/create');
});




