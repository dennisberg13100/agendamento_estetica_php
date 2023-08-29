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
<?php
    // busca atendentes no banco de dados 
    require_once('conection.php');
    $query = "SELECT * FROM usuario WHERE id_tipo = 1  ";
    $rows = $db->query($query);
    $atendentes = array();
    while ($row = $rows->fetch_assoc()) {
        $atendentes[$row['id']] = $row['nome'];
    }
    $rows->close();

    // busca clientes no banco de dados
    $query = "SELECT * FROM usuario WHERE id_tipo = 2  ";
    $rows = $db->query($query);
    $clientes = array();
    while ($row = $rows->fetch_assoc()) {
        $clientes[$row['id']] = $row['nome'];
    }
    $rows->close();

    // busca serviços no banco de dados
    $query = "SELECT * FROM produto";
    $rows = $db->query($query);
    $produtos = array();
    while ($row = $rows->fetch_assoc()) {
        $produtos[$row['id']] = $row['nome_produto'];
    }
    $rows->close();
    $db->close();
   
?>
<div>
    <h2>Adicionar um novo Agendamento!</h2>
    <form action="module/agendamento.php" method="post">
        <label for="cliente">Cliente:</label>
        <select name="cliente" id="cliente">
            <?php
            foreach($clientes as $key => $value) {
                echo '<option value="'.$key.'">'.$value.'</option>';
            }
            ?>
        </select>
        <label for="atendente">Atendente:</label>
        <select name="atendente" id="atendente">
            <?php
            foreach($atendentes as $key=>$value) {
                echo '<option value="'.$key.'">'.$value.'</option>';
            }
            ?>
        </select>
        <label for="produto">Serviço:</label>
        <select name="produto" id="produto">
        <?php
            foreach($produtos as $key=>$value) {
                echo '<option value="'.$key.'">'.$value.'</option>';
            }
            ?>
        </select>
        <label for="data">Data:</label>
        <input type="datetime-local" name="data" id="data">
        <input type="submit" value="Criar Agendamento!">
    </form>

    <hr>
    <a href="./">← Voltar para a página inicial.</a>
</div>
</body>
</html>