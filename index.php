<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Galeria de Imagens</h1>

    <div class="gallery">
        <?php
        // Exibe imagens do banco de dados
        include 'config.php'; // Arquivo de configuração do banco de dados

        $query = "SELECT * FROM imagens";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<img src="uploads/' . $row['nome_arquivo'] . '" alt="' . $row['descricao'] . '">';
        }
        ?>
    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="imagem">Escolha uma imagem:</label>
        <input type="file" name="imagem" id="imagem" required>
        <br>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
