<?php
include '../conexion/conexion.php';

if (isset($_GET['numero_documento'])) {
    $numero_documento = $_GET['numero_documento'];

    $sql = "SELECT nombre_completo FROM usuarios WHERE numero_documento = ?";
    if ($stmt = $conexcion->prepare($sql)) {
        $stmt->bind_param("s", $numero_documento);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo json_encode(['success' => true, 'nombre' => $user['nombre_completo']]);
        } else {
            echo json_encode(['success' => false]);
        }
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
