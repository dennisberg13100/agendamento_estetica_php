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
    $cliente = $_POST['cliente'];
    $atendente = $_POST['atendente'];
    $produto = $_POST['produto'];
    $data = $_POST['data'];

    $query = "INSERT INTO agendamento (id_cliente, id_atendente, id_produto, data_agendamento ) VALUES ('".$cliente."', '".$atendente."', '".$produto."', '".$data."')";

    if($db->query($query) === true) {
        echo "Cliente: " . $cliente . "<br>";
        echo "Atendente: " . $atendente . "<br>";
        echo "Produto: " . $produto . "<br>";
        echo "Data: " . $data . "<br>";
        echo "Agendamento criado com sucesso!"; 
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