<?php
include_once "connection.php";

$statement = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha);");
$statement->bindValue(':usuario', $_GET['usuario']);
$statement->bindValue(':senha', $_GET['senha']);

if ($statement->execute()) {
    echo ("adicionado");
} else {
    echo ("não adicionado");
}
