@extends('layout')

@section('conteudo')
<a href="{{ route('tarefas.create') }}" class="btn btn-primary mb-3">Nova Tarefa</a>

<table class="table table-bordered align-middle">
    <tr>
        <th>Título</th>
        <th>Categoria</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    @foreach($tarefas as $t)
    <tr>
        <td>{{ $t->titulo }}</td>
        <td>{{ $t->categoria->nome ?? '-' }}</td>
        <td>
            @if($t->concluida)
            <span class="badge bg-success">Concluída</span>
            @else
            <span class="badge bg-warning text-dark">Pendente</span>
            @endif
        </td>
        <td>
            <!-- botão alternar status -->
            <form action="{{ route('tarefas.toggle', $t) }}" method="POST" style="display:inline;">
                @csrf @method('PATCH')
                <button class="btn btn-sm {{ $t->concluida ? 'btn-secondary' : 'btn-success' }}">
                    {{ $t->concluida ? 'Marcar Pendente' : 'Concluir' }}
                </button>
            </form>

            <a href="{{ route('tarefas.edit', $t) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('tarefas.destroy', $t) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection