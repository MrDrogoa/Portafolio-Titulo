<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wordpress_portitulo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Usando consulta preparada para prevenir inyección SQL
$stmt = $conn->prepare("INSERT INTO users_wordpress (nombre, correo, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
    // Determinar la URL base del sitio
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];

    // Redirigir a la página de contacto
    header("Location: " . $protocol . $host . "/wordpress-Titulo/contacto/");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
