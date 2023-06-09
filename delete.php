<?php
include_once "connection.php";

// https://appinventor-garcia.000webhostapp.com/delete.php?id=1
$statement = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

$response = array();

if ($statement->execute()) {
    $response['status'] = 'success';
    $response['message'] = 'Usuário removido com sucesso: ' . $_GET['id'];
} else {
    $response['status'] = 'error';
    $response['message'] = 'Erro ao remover o usuário.';
}

// Retornar a resposta em formato JSON
header('Content-Type: application/json');
echo json_encode($response);
