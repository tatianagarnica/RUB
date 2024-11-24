<?php
 print_r($_POST);
include('../conexion/conexion.php');

// Obtener el ID desde POST o GET
$id_bicicleta = isset($_POST['id']) ? intval($_POST['id']) : (isset($_GET['id']) ? intval($_GET['id']) : 0);

if ($id_bicicleta <= 0) {
    echo "ID de bicicleta no válido.";
    exit;
}

// Consultar la información de la bicicleta por su ID
$query = "SELECT * FROM bicicletas WHERE id = ?";
if ($stmt = $conexcion->prepare($query)) {
    $stmt->bind_param("i", $id_bicicleta);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 0) {
        echo "La bicicleta no existe.".$id_bicicleta;
        exit;
    }

    $bicicleta = $resultado->fetch_assoc();
    $stmt->close();
} else {
    echo "Error en la consulta: " . $conexcion->error;
    exit;
}




?>
