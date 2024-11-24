<?php
session_start();
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $confirmacion_contrasena = $_POST['confirmacion_contrasena'];

    // Validar que las contraseñas coincidan
    if ($contrasena !== $confirmacion_contrasena) {
        die("Las contraseñas no coinciden. Por favor, verifica.");
    }
    $sql = "SELECT correo FROM usuarios WHERE correo = ?";
    $stmt = $conexcion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "<script>alert('El correo electrónico ya está registrado. Por favor, usa otro.'); window.history.back();</script>";
        exit;
    }
    // Encriptar la contraseña antes de almacenarla
    
    // Guardar en sesión los datos del usuario
    $_SESSION['nombre_completo'] = $nombre_completo;
    $_SESSION['correo'] = $correo;
    $_SESSION['contrasena'] = $contrasena;

    // Redirigir al segundo formulario
    header("Location: ../views/registrarusuario.php");
    exit;
}
?>


