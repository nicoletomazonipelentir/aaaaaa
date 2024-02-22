<?php
include 'config.php';

$descricao = $_POST['descricao'];

$nomeArquivo = $_FILES['imagem']['name'];
$destino = 'uploads/' . $nomeArquivo;

if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
    $query = "INSERT INTO imagens (nome_arquivo, descricao) VALUES (:nome_arquivo, :descricao)";
    
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':nome_arquivo', $nomeArquivo, SQLITE3_TEXT);
    $stmt->bindValue(':descricao', $descricao, SQLITE3_TEXT);
    $stmt->execute();

    header('Location: index.php'); // Redireciona de volta para a página principal
} else {
    echo 'Erro ao enviar o arquivo.';
}
?>
