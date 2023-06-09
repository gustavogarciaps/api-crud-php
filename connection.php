<?php
/*-------- CONFIGURAÇÕES DO SERVIDOR -------- */
$hostname = '127.0.0.1';
$username = 'id20658733_root';
$password = '_}>Ms~0)+Aort739';
$database = 'id20658733_appinventor';
$sql = "mysql:host={$hostname};dbname={$database};";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
/*-------- CONFIGURAÇÕES DO SERVIDOR -------- */

try {
    $pdo = new \PDO($sql, $username, $password, $dsn_Options);
    echo "Conexão com {$database} realizada com sucesso!";
} catch (PDOException $error) {
    echo 'Erro na conexão: ' . $error->getMessage();
}
