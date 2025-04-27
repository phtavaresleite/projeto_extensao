<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\CadastroController::class, 'index'])->name('index');
Route::post('/', [App\Http\Controllers\CadastroController::class, 'store'])->name('alunos');
Route::get('/alunos', [App\Http\Controllers\AlunosController::class, 'alunos'])->name('alunos');