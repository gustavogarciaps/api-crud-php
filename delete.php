<?php
include_once "connection.php";

//https://appinventor-garcia.000webhostapp.com/delete.php?id=1
$statement = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

if ($statement->execute()) {
    echo ("removido");
} else {
    echo ("não removido");
}
