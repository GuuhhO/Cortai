<?php
// app/db.php

$host = 'localhost';
$dbname = 'agendador';
$user = 'postgres';
$pass = '!organize@postgres!';
$charset = 'utf8mb4';
$port = '64432';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    // Sem 'charset' na DSN
    $db = new PDO("pgsql:host=$host;dbname=$dbname;port=$port", $user, $pass, $options);

    // Setar UTF8 via comando SQL
    $db->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}