<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $referencia = trim($_POST['referencia']);
    $nombre_dueño = trim($_POST['nombre_completo']);
    $documento_dueño = trim($_POST['numero_documento']);
    $nombre_nuevo = trim($_POST['nombre_completo']);
    $documento_nuevo = trim($_POST['numero_documento']);

    // Validar campos vacíos
    if (empty($referencia) || empty($nombre_dueño) || empty($documento_dueño) || empty($nombre_nuevo) || empty($documento_nuevo)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    $conexcion->begin_transaction();
    try {
        // Verificar que la bicicleta exista
        $query_bicicleta = "SELECT id, estado FROM bicicletas WHERE referencia = ?";
        $stmt_bicicleta = $conexcion->prepare($query_bicicleta);
        $stmt_bicicleta->bind_param("s", $referencia);
        $stmt_bicicleta->execute();
        $result_bicicleta = $stmt_bicicleta->get_result();

        if ($result_bicicleta->num_rows === 0) {
            throw new Exception("La bicicleta con referencia '$referencia' no está registrada.");
        }

        $bicicleta = $result_bicicleta->fetch_assoc();
        $bicicletas_id = $bicicleta['id'];

        // Verificar si ya se realizó un traspaso
        $query_historial = "SELECT id FROM traspaso WHERE bicicletas_id = ?";
        $stmt_historial = $conexcion->prepare($query_historial);
        $stmt_historial->bind_param("i", $bicicletas_id);
        $stmt_historial->execute();
        $result_historial = $stmt_historial->get_result();

        if ($result_historial->num_rows > 0) {
            throw new Exception("La bicicleta con referencia '$referencia' ya ha sido traspasada.");
        }

        // Verificar que el dueño actual exista
        $query_dueño = "SELECT id FROM usuarios WHERE numero_documento = ? AND nombre_completo = ?";
        $stmt_dueño = $conexcion->prepare($query_dueño);
        $stmt_dueño->bind_param("ss", $documento_dueño, $nombre_dueño);
        $stmt_dueño->execute();
        $result_dueño = $stmt_dueño->get_result();

        if ($result_dueño->num_rows === 0) {
            throw new Exception("El dueño actual no está registrado o los datos no coinciden.");
        }

        $dueño_actual_id = $result_dueño->fetch_assoc()['id'];

        // Verificar que el nuevo dueño exista
        $query_nuevo = "SELECT id FROM usuarios WHERE numero_documento = ? AND nombre_completo = ?";
        $stmt_nuevo = $conexcion->prepare($query_nuevo);
        $stmt_nuevo->bind_param("ss", $documento_nuevo, $nombre_nuevo);
        $stmt_nuevo->execute();
        $result_nuevo = $stmt_nuevo->get_result();

        if ($result_nuevo->num_rows === 0) {
            throw new Exception("El nuevo dueño no está registrado o los datos no coinciden.");
        }

        $nuevo_dueño_id = $result_nuevo->fetch_assoc()['id'];

        // Registrar el traspaso
        $query_traspaso = "INSERT INTO traspaso (bicicletas_id, usuario_actual, usuario_nuevo) 
                           VALUES (?, ?, ?)";
        $stmt_traspaso = $conexcion->prepare($query_traspaso);
        $stmt_traspaso->bind_param("iii", $bicicletas_id, $usuario_actual, $usuario_nuevo);

        if (!$stmt_traspaso->execute()) {
            throw new Exception("Error al registrar el traspaso.");
        }
        echo "Traspaso registrado exitosamente.";
        header("Location ../views/categorias.php");
        exit;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        if (isset($stmt_traspaso)) {
            $stmt_traspaso->close();
        }
        $conexcion->close();
    }

        // Confirmar transacción
}
    

?>
