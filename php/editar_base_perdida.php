<?php
include '../conexion/conexion.php';

// Verificar si se recibió el ID del registro de pérdida por POST o GET
$registro_id = 0;
if (isset($_POST['id'])) {
    $registro_id = intval($_POST['id']);
} elseif (isset($_GET['id'])) {
    $registro_id = intval($_GET['id']);
}

// Validar el ID
if ($registro_id <= 0) {
    echo "ID de registro no válido.";
    exit;
}

// Consultar el registro de pérdida con el ID proporcionado
$query = "SELECT rp.id, b.referencia, rp.fecha_perdida, rp.fecha_reporte, u.numero_documento, u.nombre_completo, rp.detalle 
          FROM registro_perdida rp
          INNER JOIN bicicletas b ON rp.bicicletas_id = b.id
          INNER JOIN usuarios u ON rp.usuarios_id = u.id
          WHERE rp.id = ?";
$stmt = $conexcion->prepare($query);
if (!$stmt) {
    echo "Error al preparar la consulta: " . $conexcion->error;
    exit;
}

// Asignar el parámetro y ejecutar
$stmt->bind_param("i", $registro_id);
$stmt->execute();
$result = $stmt->get_result();

// Validar si se encontró el registro
if ($result->num_rows > 0) {
    // Obtener los datos del registro
    $row = $result->fetch_assoc();
    // Aquí puedes usar $row para rellenar los datos en un formulario, por ejemplo
} else {
    echo "Registro no encontrado.";
    exit;
}

// Cerrar conexión y otros recursos
$stmt->close();
$conexcion->close();
?>
