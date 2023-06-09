<?php
include_once "connection.php";

//https://appinventor-garcia.000webhostapp.com/read.php
$statement = $pdo->query('SELECT * FROM usuarios;');
$response = array();

while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
    $usuario = array(
        'id' => $result["id"],
        'usuario' => $result["usuario"],
        'senha' => $result["senha"]
    );
    $response[] = $usuario;
}

// Retornar a resposta em formato JSON
header('Content-Type: application/json');
echo json_encode($response);
