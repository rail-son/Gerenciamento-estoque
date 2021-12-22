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

// Métodos obrigatórios
Route::get('/products', [EstoqueController::class, 'produtos']);

Route::get('/products/{id}', [EstoqueController::class, 'id_produtos']);

Route::post('/products', [EstoqueController::class, 'store']);

Route::delete('/products/{id}', [EstoqueController::class, 'destroy']);

Route::get('/produto/criar-produto', [EstoqueController::class, 'create']);

Route::get('/cidades', [EstoqueController::class, 'exibe_cidades']);





Route::get('/products/edit/{id}', [EstoqueController::class, 'edit']);





Route::put('/products/{id}', [EstoqueController::class, 'update']);


