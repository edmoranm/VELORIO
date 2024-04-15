<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Empire - Redes Sociales</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace a CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./images/velorio.jpg" type="image/x-icon">
    <style>
        .list-unstyled.d-flex li {
            margin-right: 2cm; /* Espacio de 2cm entre los iconos */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1 class="tituloRe">Redes Sociales</h1>
        <div class="row">
            <div class="col-sm-7">
                <h3>Conéctate con nosotros en nuestras redes sociales:</h3>
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="https://www.facebook.com" target="_blank"><img src="./images/facebook.png" alt="Facebook" class="iconos"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com" target="_blank"><img src="./images/gorjeo.png" alt="Twitter" class="iconos"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.coma" target="_blank"><img src="./images/instagram.png" alt="Instagram" class="iconos"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-5">
                <img src="./images/velorio.jpg" alt="Imagen" class="img-fluid">
                <h3>Información de contacto:</h3>
                <p>Dirección: 6ta Calle 22-46 Zona 4 de Villa Nueva</p>
                <p>Teléfono: +502 51609873</p>
                <p>Correo electrónico: empireRvelorio@gmail.com</p>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
