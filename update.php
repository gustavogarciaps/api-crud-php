<?php
include_once "connection.php";

//https://appinventor-garcia.000webhostapp.com/update.php?senha=senha&usuario=usuario
$statement = $pdo->prepare("UPDATE usuarios SET senha = :senha WHERE usuario = :usuario;");
$statement->bindValue(':senha', $_GET['senha']);
$statement->bindValue(':usuario', $_GET['usuario']);

if ($statement->execute()) {
    echo ("atualizado");
} else {
    echo ("não atualizado");
}
