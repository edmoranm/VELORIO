<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Empire - Registro</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace a CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./images/velorio.jpg" type="image/x-icon">
</head>
<body>
<?php include 'navbar.php'; ?>
    <!-- Contenido del registro -->
    <div  id="register" class="container">
        <div class="card">
            <div class="regist">
                <h2 class="text-center">Formulario de Registro</h2>
            </div>
            <div class="card-body">
                <form class="formulario" action="/procesar_registro" method="POST">
                    <h3>Información Personal:</h3>
                    <div class="form-group">
                        <label for="nombre">Nombre completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    <h3>Información de Contacto:</h3>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <h3>Preferencias:</h3>
                    <div class="form-group">
                        <label for="como_encontraste">¿Cómo nos encontraste?</label>
                        <select class="form-control" id="como_encontraste" name="como_encontraste" multiple>
                            <option value="buscador">Buscador</option>
                            <option value="redes_sociales">Redes sociales</option>
                            <option value="recomendacion">Recomendación de un amigo</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="boletin" name="boletin" value="si">
                        <label class="form-check-label" for="boletin">¿Te gustaría recibir nuestro boletín informativo por correo electrónico?</label>
                    </div>
                    <button id="form" type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">REGISTRARSE</button>

<!-- El modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Encabezado del modal -->
      <div class="modal-header">
        <h4 class="modal-title">REGISTRARSE</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <p>TE HAS REGISTRADO CORRECTAMENTE</p>
      
    </div>
  </div>
</div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
