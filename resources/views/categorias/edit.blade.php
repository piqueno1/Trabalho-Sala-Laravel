@extends('layout')

@section('conteudo')
<h2>Editar Categoria</h2>

<form action="{{ route('categorias.update', $categoria) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label class="form-label">Nome da Categoria</label>
        <input type="text" name="nome" value="{{ $categoria->nome }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection