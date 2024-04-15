<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Empire - Portafolio</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace a CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./images/velorio.jpg" type="image/x-icon">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1 class="tituloRe">PORTAFOLIO</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/proyecto1.png" alt="Primera imagen">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto 1</h5>
                        <p>SE REALIZO UNA PAGINA WEB PARA UNA VETERINARIA PARA EL SEÑOR MYNOR OLIVA QUIEN ESTA MUY FELIZ POR LOS RESULTADOS</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/proyecto2.png" alt="Segunda imagen">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto 2</h5>
                        <p>SE REALIZO UNA PAGINA WEB PARA LA EMPRESA TOYOTA, VENTA DE AUTOS MAS RECONOCIDA EN GUATEMALA</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/proyecto3.png" alt="Tercera imagen">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto 3</h5>
                        <p> SE REALIZO UN ALBUN DE FOTOS PARA LA EMPRESA TOYOTA</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
