@extends('layout')

@section('conteudo')
<h2>Nova Tarefa</h2>

<form action="{{ route('tarefas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="categoria_id" class="form-select" required>
            <option value="">-- selecione --</option>
            @foreach($categorias as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="concluida" value="1" class="form-check-input" id="concluida">
        <label class="form-check-label" for="concluida">Concluída</label>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection