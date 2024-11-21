<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicial');
});

Route::get('/cadastro', 'CadastroController@create');
Route::post('/cadastro', 'CadastroController@store');
Route::delete('/account/delete', [AccountController::class, 'destroy'])->name('account.delete');
Route::get('/eventos', [EventoController::class, 'index']);
Route::post('/eventos', [EventoController::class, 'store']);