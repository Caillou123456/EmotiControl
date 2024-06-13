<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="icon" href="emoti.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const loginParam = urlParams.get('login');

            if (loginParam === 'success') {
                mostrarMensajeInicioSesion();
            }
        };

        function mostrarMensajeInicioSesion() {
            document.getElementById("inicioSesionExitoso").style.display = "block";
        }

        function cerrarMensajeInicioSesion() {
            document.getElementById("inicioSesionExitoso").style.display = "none";
        }
    </script>
</head>
<body>
    <h2>Bienvenido a la página principal</h2>

    <div id="inicioSesionExitoso" style="display: none;">
        <div id="inicioSesionExitosoContent">
            <p>¡Inicio de sesión exitoso!</p>
            <button onclick="cerrarMensajeInicioSesion()">Cerrar</button>
        </div>
    </div>

    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        echo "<p>Hola, " . $_SESSION['usuario'] . "</p>";
        echo '<p>Este es el contenido de la página principal(nada aun jajaja :C  )</p>';
        //echo '<a href="cerrar_sesion.php">Cerrar sesión</a>';
    } else {
        echo "<p>No has iniciado sesión.</p>";
        echo '<a href="index.html">Volver al inicio</a>';
    }
    ?>

</body>
</html>
