<?php
// Conexión a la base de datos
include '../conexion/conexion.php';

// Obtener el ID de la bicicleta desde la URL
$id_bicicleta = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Consulta para obtener los datos de la bicicleta y el dueño relacionado
$query = $conexcion->prepare("
    SELECT 
        bicicletas.id, 
        bicicletas.referencia, 
        bicicletas.tipo_bicicleta, 
        bicicletas.numero_rin, 
        bicicletas.color, 
        bicicletas.marca, 
        bicicletas.fecha_adquisicion,
        usuarios.nombre_completo AS dueño,
        usuarios.numero_documento
    FROM 
        bicicletas
    INNER JOIN 
        usuarios 
    ON 
        bicicletas.usuarios_id = usuarios.id
    WHERE 
        bicicletas.id = ?
");
$query->bind_param('i', $id_bicicleta);
$query->execute();
$resultado = $query->get_result();
$bicicleta = $resultado->fetch_assoc();

// Si no se encuentra la bicicleta, redirige al listado
if (!$bicicleta) {
    header("Location: ../views/verlistadobicicleta.html");
    exit;
}
?>

