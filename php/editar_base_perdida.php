<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

// Verificar si se recibió el ID del registro de pérdida por POST
if (isset($_POST['registro_id'])) {
    $registro_id = $_POST['registro_id'];

    // Consultar el registro de pérdida con el ID proporcionado
    $query = "SELECT rp.id, b.referencia, rp.fecha_perdida, rp.fecha_reporte, u.numero_documento, u.nombre, rp.detalle 
              FROM registro_perdida rp
              INNER JOIN bicicletas b ON rp.bicicletas_id = b.id
              INNER JOIN usuarios u ON rp.usuarios_id = u.id
              WHERE rp.id = ?";
    $stmt = $conexcion->prepare($query);
    $stmt->bind_param("i", $registro_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener los datos del registro
        $row = $result->fetch_assoc();
    } else {
        echo "Registro no encontrado.";
        exit;
    }
} else {
    echo "ID no proporcionado.";
    exit;
}
?>