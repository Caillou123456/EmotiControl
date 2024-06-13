<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro Biblioteca</title>
    <link rel="icon" href="emoti.ico" type="image/x-icon">
    <script src="script.js"></script>
</head>
<body>

<div id="registroForm">
    <h2>Bienvenido a EmotiControl</h2>
    <form action="registro.php" method="post" onsubmit="return mostrarMensajeRegistro()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <h4>¿Ya tienes una cuenta?</h4>
    <button type="button" onclick="mostrarLogin()">Iniciar Sesión</button>
</div>

<div id="loginForm" style="display: none;">
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post" onsubmit="return mostrarMensajeInicioSesion()">
        <label for="correoLogin">Correo Electrónico:</label>
        <input type="email" id="correoLogin" name="correo" required>

        <label for="passwordLogin">Password:</label>
        <input type="password" id="passwordLogin" name="password" required>
        <br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <h4>¿Aún no tienes una cuenta?</h4>
    <button type="button" onclick="mostrarRegistro()">Registrar</button>
</div>

<div id="registroExitoso" style="display: none;">
    <p>¡Registro exitoso!</p>
</div>

<div id="inicioSesionExitoso" style="display: none;">
    <p>¡Inicio de sesión exitoso!</p>
    <button onclick="cerrarMensajeInicioSesion()">Cerrar</button>
</div>

</body>
</html>
