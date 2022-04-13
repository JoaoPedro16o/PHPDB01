<?php

// Essa deve ser SEMPRE a primeira linha de código do site.
header('Content-Type: text/html; charset=utf-8');

/**
 * Conexão com o banco de dados:
 *     As variáveis abaixo devem ser definidas conforme o provedor de hospedagem.
 *     Os dados abaixo são do XAMPP.
 */

$db = array(
    "hostname" => "localhost",
    "database" => "virtugo",
    "username" => "root",
    "password" => ""
);
$conn = new mysqli($db["hostname"], $db["username"], $db["password"], $db["database"]);