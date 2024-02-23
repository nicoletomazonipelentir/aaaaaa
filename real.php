<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section style="margin:100px 600px">
      <input type="text" placeholder="Insira o link da sua imagem" class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
      <button class="btn join-item btn-primary">Button</button>
    </section>
      
    <section class="flex w-full">
        <div class="card w-96 bg-base-100 shadow-xl image-full grid" style="margin-left:200px;">
          <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl image-full grid" style="margin-left:30px;">
          <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl image-full grid" style="margin-left:30px;">
          <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
        </div>
    </section>
    <!-- Exibir as imagens -->
    <?php
    // Conectar ao banco de dados (substitua as credenciais conforme necessário)
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Processar o envio do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o link da imagem do formulário
        $imagem = $_POST['imagem'];

        // Inserir o link da imagem no banco de dados
        $sql = "INSERT INTO imagens (link) VALUES ('$imagem')";

        if ($conn->query($sql) === TRUE) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar imagem: " . $conn->error;
        }
    }

    // Consulta para obter todas as imagens do banco de dados
    $sql = "SELECT * FROM imagens";
    $result = $conn->query($sql);

    // Exibir as imagens
    if ($result->num_rows > 0) {
        echo "<h2>Imagens Enviadas</h2>";
        while($row = $result->fetch_assoc()) {
            echo "<img src='" . $row["link"] . "' alt='Imagem'><br>";
        }
    } else {
        echo "<p>Nenhuma imagem encontrada.</p>";
    }

    // Fechar a conexão
    $conn->close();
    ?>
    <footer class="footer footer-center p-4 bg-base-300 text-base-content " style="position: fixed;bottom: 0;">
        <aside>
          <p>Copyright © 2024 - Nicole Tomazoni Pelentir</p>
        </aside>
    </footer>
  </body>
</html>
