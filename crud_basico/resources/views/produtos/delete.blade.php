<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Produto</title>
</head>
<body>
    <h1>Tem certeza que deseja excluir o produto "{{ $produto->nome }}"?</h1>

    <form method="POST" action="{{ route('excluir_produto', ['id' => $produto->id]) }}">
        @csrf

        <button type="submit">Sim</button>
    </form>
</body>
</html>