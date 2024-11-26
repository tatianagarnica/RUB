<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

// Verificar si el formulario se envió por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos enviados por POST
    $registro_id = trim($_POST['registro_id']);
    $referencia = trim($_POST['referencia']);
    $fecha_perdida =trim($_POST['fecha_perdida']);
    $fecha_reporte = trim($_POST['fecha_reporte']);
    $numero_documento = trim($_POST['numero_documento']);
    $direccion = trim($_POST['direccion']);
    
    $detalle = trim($_POST['detalle']);

    // Validar campos requeridos
    if (empty($referencia) || empty($fecha_perdida) || empty($fecha_reporte) || empty($numero_documento) || empty($direccion) || empty($detalle)) {
        echo "Por favor, completa todos los campos obligatorios.";
        exit;
    }
    // Verificar si el usuarios_id existe
    $query_usuario = "SELECT id FROM usuarios WHERE numero_documento = ?";
    if ($stmt_usuario = $conexcion->prepare($query_usuario)) {
        $stmt_usuario->bind_param("s", $numero_documento);
        $stmt_usuario->execute();
        $resultado_usuario = $stmt_usuario->get_result();

        if ($resultado_usuario->num_rows > 0) {
            $usuario = $resultado_usuario->fetch_assoc();
            $usuarios_id = $usuario['id']; // ID del usuario asociado
        } else {
            echo "El número de documento no está registrado en la base de datos.";
            exit;
        }

        $stmt_usuario->close();
    } else {
        echo "Error al verificar el usuario: " . $conexcion->error;
        exit;
    }

    // Actualizar en la tabla registro_perdida
    $query_update = "UPDATE registro_perdida 
                     SET fecha_perdida = ?, fecha_reporte = ?, detalle = ? , direccion = ?, usuarios_id = ?
                     WHERE id = ?";
    $stmt = $conexcion->prepare($query_update);
    $stmt->bind_param("ssssii", $fecha_perdida, $fecha_reporte,$direccion, $detalle,$usuarios_id, $registro_id);

    if ($stmt->execute()) {
        // Si la actualización fue exitosa, redirigir
        header("Location: ../views/verlistaperdidas.php");
        exit();
    } else {
        echo "Error al actualizar el registro de pérdida.";
    }

    // Cerrar la conexión
    $stmt->close();
    $conexcion->close();
} else {
    echo "Acceso no permitido.";
}
?>
