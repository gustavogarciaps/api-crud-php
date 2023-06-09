<?php
include_once "connection.php";

// https://appinventor-garcia.000webhostapp.com/create.php?usuario=usuario&senha=senha
$statement = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha);");
$statement->bindValue(':usuario', $_GET['usuario']);
$statement->bindValue(':senha', $_GET['senha']);

$response = array();

if ($statement->execute()) {
    $response['status'] = 'success';
    $response['message'] = 'Usuário adicionado com sucesso.';
    $response['usuario'] = array(
        'usuario' => $_GET['usuario'],
        'senha' => $_GET['senha']
    );
} else {
    $response['status'] = 'error';
    $response['message'] = 'Erro ao adicionar o usuário.';
}

// Retornar a resposta em formato JSON
header('Content-Type: application/json');
echo json_encode($response);
