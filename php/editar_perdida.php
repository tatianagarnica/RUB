<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

// Verificar si el formulario se envió por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos enviados por POST
    $registro_id = $_POST['registro_id'];
    $referencia = $_POST['referencia'];
    $fecha_perdida = $_POST['fecha_perdida'];
    $fecha_reporte = $_POST['fecha_reporte'];
    $numero_documento = $_POST['numero_documento'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];

    // Validar campos requeridos
    if (empty($referencia) || empty($fecha_perdida) || empty($fecha_reporte) || empty($numero_documento) || empty($nombre) || empty($detalle)) {
        echo "Por favor, completa todos los campos obligatorios.";
        exit;
    }

    // Actualizar en la tabla registro_perdida
    $query_update = "UPDATE registro_perdida 
                     SET fecha_perdida = ?, fecha_reporte = ?, detalle = ? 
                     WHERE id = ?";
    $stmt = $conexcion->prepare($query_update);
    $stmt->bind_param("sssi", $fecha_perdida, $fecha_reporte, $detalle, $registro_id);

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
