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
    $nome = $_POST['nome'];
    $valor = (int)$_POST['valor'];

    $query = "INSERT INTO produto (nome_produto, valor) VALUES ('".$nome."', '".$valor."')";

    if($db->query($query) === true) {
        echo "Tipo: " . $nome . "<br>";
        echo "Nome: " . $valor . "<br>";
        echo "Serviço criado com sucesso!"; 
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