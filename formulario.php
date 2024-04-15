<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Empire - Cotización</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace a CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./images/velorio.jpg" type="image/x-icon">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1 class="tituloRe">Solicitar Cotización</h1>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="date">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="date" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Proyecto:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="mostrarCotizacion()">Enviar Cotización</button>
        </form>

        <div id="resultadoCotizacion" style="display: none; margin-top: 20px;">
            <h2>Detalles de la Cotización:</h2>
            <p id="nombreCotizacion"></p>
            <p id="emailCotizacion"></p>
            <p id="telefonoCotizacion"></p>
            <p id="descripcionCotizacion"></p>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function mostrarCotizacion() {
            var nombre = document.getElementById("nombre").value;
            var email = document.getElementById("email").value;
            var telefono = document.getElementById("telefono").value;
            var descripcion = document.getElementById("descripcion").value;

            document.getElementById("nombreCotizacion").innerText = "Nombre: " + nombre;
            document.getElementById("emailCotizacion").innerText = "Correo Electrónico: " + email;
            document.getElementById("telefonoCotizacion").innerText = "Teléfono: " + telefono;
            document.getElementById("descripcionCotizacion").innerText = "Descripción del Proyecto: " + descripcion;

            document.getElementById("resultadoCotizacion").style.display = "block";
        }
    </script>
</body>
</html>
