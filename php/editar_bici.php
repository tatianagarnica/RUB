
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// Conexión a la base de datos
include('../conexion/conexion.php');

// Verifica que se haya enviado el formulario correctamente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar el ID de la bicicleta (desde POST o GET según el caso)
    // Obtén los datos enviados desde el formulario
    $id_bicicleta = trim ($_POST['id']); // ID de la bicicleta
    $tipo_bicicleta = trim($_POST['tipo_bicicleta']);
    $referencia =trim ($_POST['referencia']);
    $fecha_adquisicion =trim( $_POST['fecha_adquisicion']);
    $color = trim($_POST['color']);
    $numero_rin = trim ($_POST['numero_rin']);
    $marca = trim($_POST['marca']);
    $valor = trim($_POST['valor']);
    $numero_documento = trim($_POST['numero_documento']); // Número de documento del usuario

    // Validación básica
    if (
        empty($id_bicicleta) ||empty($tipo_bicicleta) || empty($referencia) || empty($fecha_adquisicion) || empty($color) || 
        empty($numero_rin) || empty($marca) || empty($valor) || empty($numero_documento)
    ) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Verifica que el número de documento existe en la tabla `usuarios`
    $query_usuario = "SELECT id FROM usuarios WHERE numero_documento = ?";
    if ($stmt_usuario = $conexcion->prepare($query_usuario)) {
        $stmt_usuario->bind_param("s", $numero_documento);
        $stmt_usuario->execute();
        $resultado_usuario = $stmt_usuario->get_result();

        if ($resultado_usuario->num_rows > 0) {
            $usuario = $resultado_usuario->fetch_assoc();
            $usuarios_id = $usuario['id']; // ID del usuario asociado
        } else {
            echo "El número de documento no está registrado en la base de datos.";
            exit;
        }

        $stmt_usuario->close();
    } else {
        echo "Error al verificar el usuario: " . $conexcion->error;
        exit;
    }

    // Actualiza los datos de la bicicleta
    $query = "UPDATE bicicletas SET 
                tipo_bicicleta = ?, 
                referencia = ?, 
                fecha_adquisicion = ?, 
                color = ?, 
                numero_rin = ?, 
                marca = ?, 
                valor = ?, 
                usuarios_id = ?
              WHERE id = ?";

    if ($stmt = $conexcion->prepare($query)) {
        $stmt->bind_param(
            "ssssssdii", 
            $tipo_bicicleta, 
            $referencia, 
            $fecha_adquisicion, 
            $color, 
            $numero_rin, 
            $marca, 
            $valor, 
            $usuarios_id, 
            $id_bicicleta
        );

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Actualización exitosa.";
                header("Location: ../views/verlistadobicicleta.php");
                exit();
            } else {
                echo "No se actualizó ningún registro. Verifica los valores enviados.";
            }
        }
        
}
}   
?>

