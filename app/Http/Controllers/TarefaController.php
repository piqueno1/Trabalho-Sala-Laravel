<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::with('categoria')->get();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('tarefas.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'descricao' => 'nullable',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        // checkbox "concluida"
        $data['concluida'] = $request->has('concluida');

        Tarefa::create($data);
        return redirect()->route('tarefas.index');
    }

    public function edit(Tarefa $tarefa)
    {
        $categorias = Categoria::all();
        return view('tarefas.edit', compact('tarefa', 'categorias'));
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'descricao' => 'nullable',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $data['concluida'] = $request->has('concluida');

        $tarefa->update($data);
        return redirect()->route('tarefas.index');
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }

    // método novo para alternar status
    public function toggleStatus(Tarefa $tarefa)
    {
        $tarefa->concluida = !$tarefa->concluida;
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }
}
