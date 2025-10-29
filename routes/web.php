<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TarefaController;

Route::get('/', function () {
    return redirect('/categorias');
});

Route::resource('categorias', CategoriaController::class);
Route::resource('tarefas', TarefaController::class);
Route::patch('/tarefas/{tarefa}/toggle', [TarefaController::class, 'toggleStatus'])->name('tarefas.toggle');
