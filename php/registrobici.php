<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos del formulario
    $referencia = $_POST['referencia'];
    $numero_documento = $_POST['numero_documento'];  // Número de documento del dueño
    $tipo_bicicleta = $_POST['tipo_bicicleta'];
    $fecha_adquisicion = $_POST['fecha_adquisicion'];
    $color = $_POST['color'];
    $marca = $_POST['marca'];
    $valor = $_POST['valor'];
    $numero_rin = $_POST['numero_rin'];  // Nuevo campo para el número de rin

    // Verificar si los campos están completos
    if (!empty($referencia) && !empty($numero_documento) && !empty($tipo_bicicleta) && !empty($fecha_adquisicion) && !empty($color) && !empty($marca) && !empty($valor) && !empty($numero_rin)) {
        
        // Verificar si el número de documento existe en la tabla de usuarios
        $sql = "SELECT id, nombre_completo FROM usuarios WHERE numero_documento = ?";
        
        if ($stmt = $conexcion->prepare($sql)) {
            // Vincular el parámetro y ejecutar la consulta
            $stmt->bind_param("s", $numero_documento);  // 's' para string
            $stmt->execute();
            $result = $stmt->get_result();
            
            // Verificar si la consulta devolvió resultados
            if ($result && $result->num_rows > 0) {
                // Obtener el ID y nombre del usuario
                $user = $result->fetch_assoc();
                $usuarios_id = $user['id'];  // Obtener el ID del usuario
                $nombre_dueño = $user['nombre_completo'];  // Obtener el nombre del dueño

                // Ahora insertar la bicicleta con el ID del usuario y el número de rin
                $insert_sql = "INSERT INTO bicicletas (referencia, tipo_bicicleta, fecha_adquisicion, color, marca, valor,  numero_rin,usuarios_id)
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                if ($insert_stmt = $conexcion->prepare($insert_sql)) {
                    // Vincular los parámetros y ejecutar la inserción
                    $insert_stmt->bind_param("sssssssi", $referencia, $tipo_bicicleta, $fecha_adquisicion, $color, $marca, $valor,  $numero_rin, $usuarios_id);

                    if ($insert_stmt->execute()) {
                        // Redirigir a la página de éxito (puedes cambiar la URL a la que quieras redirigir)
                        header("Location: ../views/categorias.php");
                        exit(); // Termina la ejecución del script para evitar que se siga ejecutando
                    } else {
                        echo "Error al registrar la bicicleta: " . $insert_stmt->error;
                    }
                    $insert_stmt->close();
                } else {
                    echo "Error en la preparación de la consulta de inserción: " . $conexcion->error;
                }
            } else {
                // Si el número de documento no está registrado
                echo "El número de identificación no está registrado en la tabla de usuarios.";
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta de validación: " . $conexcion->error;
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>


