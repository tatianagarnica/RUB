<?php
session_start();
include '../conexion/conexion.php';
include '../php/archivo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = $_SESSION['nombre_completo'];
    $contrasena = password_hash($_SESSION['contrasena'], PASSWORD_DEFAULT);
    $email = $_SESSION['correo'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $direccion = $_POST['direccion'];
    $departamento_actual = $_POST['departamento_actual'];
    $municipio_actual = $_POST['municipio_actual'];
    $celular = $_POST['numero_celular'];
    $tipo_persona = $_POST['tipo_persona'];
    

    // Procesar archivo si es Persona Jurídica
    $archivo = null;
    if ($tipo_persona === "Persona Jurídica" && isset($_FILES['nombre_archivo']) && $_FILES['nombre_archivo']['error'] == 0) {
        $archivo = "uploads/" . basename($_FILES['nombre_archivo']['name']);
        if (!move_uploaded_file($_FILES['nombre_archivo']['tmp_name'], $archivo)) {
            echo "Error al mover el archivo.";
            exit;
        }
    }
$conexcion->begin_transaction();
try {

    // Insertar datos usando mysqli
    $stmt = $conexcion->prepare(
        "INSERT INTO usuarios 
        (nombre_completo, nombre_usuario, contrasena, correo, tipo_documento, numero_documento, direccion, departamento_actual, municipio_actual, numero_celular, tipo_persona) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sssssssssss",
        $nombre_completo,
        $nombre_usuario,
        $contrasena,
        $email,
        $tipo_documento,
        $numero_documento,
        $direccion,
        $departamento_actual,
        $municipio_actual,
        $celular,
        $tipo_persona
    );
    $stmt->execute();
    $usuario_id = $conexcion->insert_id;

    if ($tipo_persona == "Persona Jurídica" && $archivo) {
        $stmt_archivo = $conn->prepare("INSERT INTO archivos (usuario_id, nombre_archivo) VALUES (?, ?)");
        $stmt_archivo->bind_param("is", $usuario_id, $archivo);
        $stmt_archivo->execute();
    }
    $conexcion->commit();

    header("Location: ../views/categorias.php");
    exit;
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $conexcion->rollback();
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexcion->close();
}
?>