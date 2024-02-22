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
        <input type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs" style="margin:100px 600px"/>

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


    <footer class="footer footer-center p-4 bg-base-300 text-base-content " style="position: fixed;bottom: 0;">
        <aside>
            <p>Copyright © 2024 - All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer>
    </body>
</html>