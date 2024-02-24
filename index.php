<? include 'get_imagem.php';?>
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
        <?php include 'insert_image.php'; ?>
        <?php include 'get_images.php'; ?>

        <section style="margin:100px 600px">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="imagem" placeholder="Insira o link da sua imagem" class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                <button type="submit" class="btn join-item btn-primary">Enviar</button>
            </form>
        </section>

        <section class="flex w-full">
        <div class="card w-96 bg-base-100 shadow-xl image-full grid">
            <figure>
                <?php
                $images = getImages();
                if (!empty($images)) {
                    echo "<h2>Imagens Enviadas</h2>";
                    foreach ($images as $image) {
                        echo "<img src='" . $image['link'] . "' alt='Imagem'><br>";
                    }
                } else {
                    echo "<p>Nenhuma imagem encontrada.</p>";
                }
                ?>
            </figure>
        </div>
    </section>

        <footer class="footer footer-center p-4 bg-base-300 text-base-content " style="position: fixed;bottom: 0;">
            <aside>
                <p>Copyright © 2024 - Nicole Tomazoni Pelentir</p>
            </aside>
        </footer>
    </body>
</html>
