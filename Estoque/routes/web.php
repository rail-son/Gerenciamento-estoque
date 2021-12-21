<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\EstoqueController;

Route::get('/', [EstoqueController::class, 'index']);

Route::get('/produto/criar-produto', [EstoqueController::class, 'create']);

Route::get('/products', [EstoqueController::class, 'produtos']);

Route::post('/products', [EstoqueController::class, 'store']);

Route::get('/products/{id}', [EstoqueController::class, 'id_produtos']);

Route::put('/products/{id}', [EstoqueController::class, 'editar_produto']);

Route::delete('/products/{id}', [EstoqueController::class, 'destroy']);

Route::get('/exibe-cidades', [EstoqueController::class, 'exibe_cidades']);



