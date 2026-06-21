<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>

    <form method="POST" action="{{ route('registra_produto') }}">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome"><br>

        <label>Custo:</label>
        <input type="text" name="custo"><br>

        <label>Preço:</label>
        <input type="text" name="preco"><br>

        <label>Quantidade:</label>
        <input type="text" name="quantidade"><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>