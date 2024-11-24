<?php
// Conexión a la base de datos
include('../conexion/conexion.php');

// Verifica si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $correo = trim($_POST['correo']);
    $contrasena = trim($_POST['contrasena']);

    // Validación básica
    if (empty($correo) || empty($contrasena)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Consulta para buscar al usuario
    $query = "SELECT id, contrasena FROM usuarios WHERE correo = ?";
    if ($stmt = $conexcion->prepare($query)) {
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();

            // Verifica la contraseña
            if (password_verify($contrasena, $usuario['contrasena'])) {
                // Inicia sesión y redirige
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                echo "Login exitoso.";
                header("Location: ../views/categorias.php");
                exit;
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "No existe una cuenta con este correo. Ttines que registrate";
        }

        $stmt->close();
    } else {
        echo "Error en la consulta: " . $conexcion->error;
    }

    $conexcion->close();
}
?>
