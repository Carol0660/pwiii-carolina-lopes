<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form method="POST" action="{{ route('alterar_produto', ['id' => $produto->id]) }}">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}"><br>

        <label>Custo:</label>
        <input type="text" name="custo" value="{{ $produto->custo }}"><br>

        <label>Preço:</label>
        <input type="text" name="preco" value="{{ $produto->preco }}"><br>

        <label>Quantidade:</label>
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>