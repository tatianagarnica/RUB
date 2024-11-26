<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

if (isset($_GET['id'])) {
    $registro_id = $_GET['id'];

    // Consulta para eliminar la bicicleta
    $sql = "DELETE FROM registro_perdida WHERE id = ?";
    
    if ($stmt = $conexcion->prepare($sql)) {
        // Vincular el parámetro
        $stmt->bind_param("i", $registro_id);
        
        if ($stmt->execute()) {
            // Redirigir después de eliminar
            header("Location: ../views/verlistaperdidas.php");
            exit();
        } else {
            echo "Error al eliminar la bicicleta.";
        }
        $stmt->close();
    }
}

$conexcion->close();
?>