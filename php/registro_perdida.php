<?php
// Verificar que el formulario se envió por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('../conexion/conexion.php');

    // Capturar datos enviados por el formulario
    $referencia = isset($_POST['referencia']) ? trim($_POST['referencia']) : '';
    $tipo_documento = isset($_POST['tipo_documento']) ? trim($_POST['tipo_documento']) : '';
    $numero_documento = isset($_POST['numero_documento']) ? trim($_POST['numero_documento']) : '';
    $fecha_reporte = isset($_POST['fecha_reporte']) ? trim($_POST['fecha_reporte']) : '';
    $fecha_perdida = isset($_POST['fecha_perdida']) ? trim($_POST['fecha_perdida']) : '';
    $direccion = isset($_POST['direccion']) ? trim($_POST['direccion']) : '';
    $detalle = isset($_POST['detalle']) ? trim($_POST['detalle']) : '';

    // Validar campos requeridos
    if (empty($referencia) || empty($tipo_documento) || empty($numero_documento) || empty($fecha_reporte) || empty($fecha_perdida) || empty($direccion) || empty($detalle)) {
        echo "Por favor, completa todos los campos obligatorios.";
        exit;
    }

    // Buscar ID de la bicicleta
    $query_bicicleta = "SELECT id FROM bicicletas WHERE referencia = ?";
    $stmt_bicicleta = $conexcion->prepare($query_bicicleta);
    $stmt_bicicleta->bind_param("s", $referencia);
    $stmt_bicicleta->execute();
    $resultado_bicicleta = $stmt_bicicleta->get_result();

    if ($resultado_bicicleta->num_rows === 0) {
        echo "No se encontró ninguna bicicleta con la referencia '$referencia'.";
        exit;
    }
    $bicicleta = $resultado_bicicleta->fetch_assoc();
    $id_bicicleta = $bicicleta['id'];

    // Verificar si el usuario está registrado
    $query_usuario = "SELECT id FROM usuarios WHERE numero_documento = ?";
    $stmt_usuario = $conexcion->prepare($query_usuario);
    $stmt_usuario->bind_param("s", $numero_documento);
    $stmt_usuario->execute();
    $resultado_usuario = $stmt_usuario->get_result();

    if ($resultado_usuario->num_rows === 0) {
        echo "El número de documento no está registrado.";
        exit;
    }
    $usuario = $resultado_usuario->fetch_assoc();
    $usuario_id = $usuario['id'];

    // Iniciar transacción para garantizar consistencia
    $conexcion->begin_transaction();

    try {
        // Estado a actualizar
        $estado_perdida = 'PERDIDO';

        // Insertar en la tabla registro_perdida (con el estado)
        $query_insert = "INSERT INTO registro_perdida (bicicletas_id, usuarios_id, fecha_reporte, fecha_perdida, direccion, detalle, estado) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conexcion->prepare($query_insert);
        $stmt_insert->bind_param("iisssss", $id_bicicleta, $usuario_id, $fecha_reporte, $fecha_perdida, $direccion, $detalle, $estado_perdida);

        if (!$stmt_insert->execute()) {
            throw new Exception("Error al registrar la pérdida: " . $stmt_insert->error);
        }

        // Actualizar el estado en la tabla bicicletas
        $update_query = "UPDATE bicicletas SET estado = ? WHERE id = ?";
        $update_stmt = $conexcion->prepare($update_query);
        $update_stmt->bind_param("si", $estado_perdida, $id_bicicleta);

        if (!$update_stmt->execute()) {
            throw new Exception("Error al actualizar el estado de la bicicleta: " . $update_stmt->error);
        }

        // Confirmar transacción
        $conexcion->commit();
        header("Location: ../views/categorias.php");
                exit();

        echo "<script>
            Swal.fire({
                title: 'Éxito',
                text: 'La pérdida se registró correctamente y los estados se actualizaron.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then(() => {
                window.location.href = '../views/categorias.php';
            });
        </script>";

    } catch (Exception $e) {
        // Revertir transacción en caso de error
        $conexcion->rollback();
        echo "Error: " . $e->getMessage();
    }

    // Cerrar conexiones
    $stmt_bicicleta->close();
    $stmt_usuario->close();
    $stmt_insert->close();
    $update_stmt->close();
    $conexcion->close();
} else {
    echo "Acceso no permitido.";
}
?>


