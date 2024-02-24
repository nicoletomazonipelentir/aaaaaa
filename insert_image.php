<?php
include 'db.php';

function insertImage($imagem) {
    global $conn;
    
    $sql = "INSERT INTO imagens (link) VALUES ('$imagem')";

    if ($conn->query($sql) === TRUE) {
        return "Imagem enviada com sucesso!";
    } else {
        return "Erro ao enviar imagem: " . $conn->error;
    }
}
?>
