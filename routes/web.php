<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarController; 

use App\Http\Controllers\EcompJrMemberController;

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

Route::get('/', [UsuarController::class, "inicial"]);
Route::post('/logar', [UsuarController::class, "verificarLogin"]); 

Route::get('/cadastrar', [UsuarController::class, "cadastrarUsuario"]);
Route::post('/cadastrarUsuario', [UsuarController::class, "enviarCadastroUsuario"]);

Route::get('/Seguinte', [UsuarController::class, "paginaSeguinte"]); 

Route::get('/cadastroMembro', [EcompJrMemberController::class, "cadastroMembro"]);
Route::post('/cadastrarMembro', [EcompJrMemberController::class, "cadastrarMembro"]);

Route::get('/listarMembros', [EcompJrMemberController::class, "listarMembros"]);

Route::get('/buscaMembro', [EcompJrMemberController::class, "buscaMembro"]);
Route::post('/buscaMembro', [EcompJrMemberController::class, "buscarMembro"]);
