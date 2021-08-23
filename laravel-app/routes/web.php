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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/produtos', 'ProdutosController@index');

/*Route::get('/produtos/create', function () 
{
    return view('produtos/create');
});*/

// Criando a rota e dando o nome de "produto.create"
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');

Route::post('/produtos/store', [ProdutosController::class, 'store'])->name('produtos.store');

Route::get('/produtos/index', [ProdutosController::class, 'index'])->name('produtos.index');

// Mostrar um produto pelo ID
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.findOne');

// Deletar pelo ID
Route::post('/produtos/delete', [ProdutosController::class, 'destroy'])->name('produto.delete');

// Atualizar pelo ID
Route::post('/produtos/update', [ProdutosController::class, 'updateForm'])->name('produto.update');
Route::post('/produtos/updated', [ProdutosController::class, 'updated'])->name('produto.updated');



