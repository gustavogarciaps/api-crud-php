<?php
include_once "connection.php";

$statement = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

if ($statement->execute()) {
    echo ("removido");
} else {
    echo ("não removido");
}
