<?php
$servidor = "127.0.0.1:3307"; // Puerto de XAMPP
$usuario = "root";
$password = "";
$base = "registroji";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
