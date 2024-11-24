<?php
include '../conexion/conexion.php';

$tipos_bicicleta = [];
$sql = "SHOW COLUMNS FROM bicicletas LIKE 'tipo_bicicleta'";
$result = $conexcion->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    // Obtener los valores del ENUM y procesarlos
    $enum_values = $row['Type']; // Ejemplo: "enum('Todo Terreno','Playera','Carretera')"
    preg_match("/^enum\((.*)\)$/", $enum_values, $matches);
    if (!empty($matches[1])) {
        $tipos_bicicleta = array_map(function ($value) {
            return trim($value, "'");
        }, explode(",", $matches[1]));
    }
}
?>