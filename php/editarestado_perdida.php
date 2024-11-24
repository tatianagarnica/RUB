<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

// Verificar si se han enviado los datos del formulario
if (isset($_POST['registro_id']) && isset($_POST['estado'])) {
    $registro_id = $_POST['registro_id'];
    $estado = $_POST['estado'];

    // Iniciar la transacción para asegurar que ambas tablas se actualicen correctamente
    $conexcion->begin_transaction();

    try {
        // Actualizar el estado en la tabla de registro_perdida
        $query_perdida = "UPDATE registro_perdida SET estado = ? WHERE id = ?";
        $stmt = $conexcion->prepare($query_perdida);
        $stmt->bind_param("si", $estado, $registro_id);
        $stmt->execute();

        // Actualizar el estado en la tabla bicicletas (si corresponde)
        if ($estado == 'recuperado') {
            $query_bicicleta = "UPDATE bicicletas SET estado = ? WHERE id = (SELECT bicicletas_id FROM registro_perdida WHERE id = ?)";
            $stmt_bicicleta = $conexcion->prepare($query_bicicleta);
            $stmt_bicicleta->bind_param("si", $estado, $registro_id); // Pasar los dos parámetros necesarios
            $stmt_bicicleta->execute();
        }

        // Si todo fue bien, commit de la transacción
        $conexcion->commit();
        
        
    } catch (Exception $e) {
        // Si hay algún error, revertir la transacción
        $conexcion->rollback();
        echo "Error al actualizar el estado: " . $e->getMessage();
    }
} else {
    echo "Faltan datos para actualizar el estado.";
}

$conexcion->close();
?>


