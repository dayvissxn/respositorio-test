<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "emprega_mais";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
