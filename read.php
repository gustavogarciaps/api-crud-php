<?php
include_once "connection.php";

$statement = $pdo->query('SELECT * FROM usuarios;');
while ($result = $statement->fetch(PDO::FETCH_ASSOC)) { 
    echo ($result["id"]).PHP_EOL;
    echo ($result["usuario"]).PHP_EOL;
    echo ($result["senha"] ).PHP_EOL;
    PHP_EOL;
}
?>