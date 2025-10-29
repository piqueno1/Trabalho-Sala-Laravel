@extends('layout')

@section('conteudo')
<h2>Editar Tarefa</h2>

<form action="{{ route('tarefas.update', $tarefa) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" value="{{ $tarefa->titulo }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control" rows="3">{{ $tarefa->descricao }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="categoria_id" class="form-select" required>
            @foreach($categorias as $cat)
            <option value="{{ $cat->id }}" {{ $tarefa->categoria_id == $cat->id ? 'selected' : '' }}>
                {{ $cat->nome }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="concluida" value="1" class="form-check-input" id="concluida"
            {{ $tarefa->concluida ? 'checked' : '' }}>
        <label class="form-check-label" for="concluida">Concluída</label>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection