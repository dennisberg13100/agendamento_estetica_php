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
    <h2>Adicionar um novo usuário.</h2>
    <form action="module/usuario.php" method="post">
        <label for="tipo">Tipo de usuário</label>
        <select name="tipo" id="tipo">
            <?php
                // busca no banco de dados os tipos de usuários
                require_once('conection.php');
                $query = "SELECT * FROM usuario_tipo";
                $tipos = $db->query($query);
                while ($row = $tipos->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['nome'] . "</option>";
                }
                $tipos->close();
                $db->close();
            ?>
        </select>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Criar usuário!">
    </form>
<div>
    <hr>
    <a href="./">← Voltar para a página inicial.</a>
</div>
</body>
</html>