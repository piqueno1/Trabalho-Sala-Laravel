@extends('layout')

@section('conteudo')
<a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    @foreach($categorias as $categoria)
    <tr>
        <td>{{ $categoria->nome }}</td>
        <td>
            <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection