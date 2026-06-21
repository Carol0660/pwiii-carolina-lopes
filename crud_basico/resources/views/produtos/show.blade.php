<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Produto</title>
</head>
<body>
    <h1>Visualizar Produto</h1>

    <label>Nome:</label>
    <input type="text" value="{{ $produto->nome }}" readonly><br>

    <label>Custo:</label>
    <input type="text" value="{{ $produto->custo }}" readonly><br>

    <label>Preço:</label>
    <input type="text" value="{{ $produto->preco }}" readonly><br>

    <label>Quantidade:</label>
    <input type="text" value="{{ $produto->quantidade }}" readonly><br>
</body>
</html>