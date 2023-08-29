<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELADONA</title>
    <style>
        form {
            display: grid;
            grid-template-columns: 100px 300px;
            gap: 10px;
        }
    </style>
</head>
<body>
    <?php
    require_once('../conection.php');
    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO usuario (id_tipo, nome, login, senha) VALUES ('".$tipo."', '".$nome."', '".$login."', '".$senha."')";

    if($db->query($query) === true) {
        echo "Tipo: " . $tipo . "<br>";
        echo "Nome: " . $nome . "<br>"; 
        echo "Login: " . $login . "<br>"; 
        echo "Senha: " . $senha . "<br>";
        echo "Usuário inserido com sucesso!"; 
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }

    $db->close();
    ?>
    <div>
    <hr>
    <a href="../">← Voltar para a página inicial.</a>
</div>
</body>
</html>