<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Empire - Navbar con CSS</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace a tu archivo CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-color bg-color">
    <div class="container">
        <a class="navbar-brand" href="#">GALAXY EMPIRE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portafolio.php">PORTAFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="equipo.php">EQUIPO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="redes.php">REDES SOCIALES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario.php">COTIZACIÓN</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">REGISTRARSE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
