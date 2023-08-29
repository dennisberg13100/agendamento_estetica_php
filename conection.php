<?php
$db = new mysqli("127.0.0.1", "root", "", "estetica");

/*
if($db->connect_errno){
    echo "Não foi possível connectar ao banco de dados: (" . $db->connect_errno . ") ". $db->connect_error; 
} else {
    echo "Connectado a: " . $db->host_info . "\n";
}
*/