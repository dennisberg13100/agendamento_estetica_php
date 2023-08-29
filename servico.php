<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELADONA</title>
    <style>
        form {
            display: grid;
            grid-template-columns: 150px 300px;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h2>Adicionar um novo serviço.</h2>
    <form action="module/servico.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="preco">Preço:</label>
        <input type="number" name="valor" id="valor">
        <input type="submit" value="Criar Serviço!">
    </form>
<div>
    <hr>
    <a href="./">← Voltar para a página inicial.</a>
</div>
</body>
</html>