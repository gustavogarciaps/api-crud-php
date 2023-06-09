<?php
include_once "connection.php";

//https://appinventor-garcia.000webhostapp.com/create.php?usuario=usuario&senha=senha
$statement = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha);");
$statement->bindValue(':usuario', $_GET['usuario']);
$statement->bindValue(':senha', $_GET['senha']);

if ($statement->execute()) {
    echo ("adicionado");
} else {
    echo ("não adicionado");
}
