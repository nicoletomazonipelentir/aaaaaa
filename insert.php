<?php
include 'db.php';

function insertImage($imagem) {
    global $conn;
    
    $sql = "INSERT INTO imagens (link) VALUES ('$imagem')";
}
?>
