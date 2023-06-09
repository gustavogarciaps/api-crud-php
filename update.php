<?php
include_once "connection.php";

//https://appinventor-garcia.000webhostapp.com/update.php?senha=senha&usuario=usuario
$statement = $pdo->prepare("UPDATE usuarios SET senha = :senha WHERE usuario = :usuario;");
$statement->bindValue(':senha', $_GET['senha']);
$statement->bindValue(':usuario', $_GET['usuario']);

$response = array();

if ($statement->execute()) {
    $response['status'] = 'success';
    $response['message'] = 'Dados atualizados com sucesso.';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Erro ao atualizar os dados.';
}

// Retornar a resposta em formato JSON
header('Content-Type: application/json');
echo json_encode($response);
