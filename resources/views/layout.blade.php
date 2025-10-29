<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

    <div class="container">
        <h1 class="mb-4 text-center">Gerenciador de Tarefas</h1>

        <nav class="mb-4">
            <a href="{{ route('categorias.index') }}" class="btn btn-outline-primary btn-sm">Categorias</a>
            <a href="{{ route('tarefas.index') }}" class="btn btn-outline-primary btn-sm">Tarefas</a>
        </nav>

        @yield('conteudo')
    </div>

</body>

</html>