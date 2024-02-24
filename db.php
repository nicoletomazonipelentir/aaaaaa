<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "galeria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
