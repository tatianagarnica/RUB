<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';

// Consultar las bicicletas registradas
$sql = "SELECT b.id, b.referencia, b.tipo_bicicleta,b.referencia, b.estado, u.nombre_usuario AS propietario
        FROM bicicletas b
        JOIN usuarios u ON b.usuarios_id = u.id";

$result = $conexcion->query($sql);
$contador = 1;

// Arreglo para almacenar las bicicletas con índice personalizado
$bicicletas = [];


if ($result->num_rows > 0) {
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>#</th>';
    echo '<th>Tipo de Bicicleta</th>';
    echo '<th>referencia</th>';
    echo '<th>Estado</th>';
    echo '<th style="padding-left:18%;">Operaciones</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Mostrar los resultados
    if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $row['numero_registro'] = $contador;
        $bicicletas[] = $row;
        $contador++;

        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['numero_registro']) . '</td>';
        echo '<td>' . htmlspecialchars($row['tipo_bicicleta']) . '</td>';
        echo '<td>' . htmlspecialchars($row['referencia']) . '</td>';
        echo '<td>' . htmlspecialchars($row['estado']) . '</td>';
        echo '<td>';
        echo "<td style= padding-left:; >
        <a href='../views/detalle.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'>
            <i class='fa-solid fa-eye'></i>
        </a>
        <a href='../views/editarBicicleta.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>
            <i class='fa-solid fa-pen-to-square'></i>
        </a>
        <a href='../php/eliminarBicicleta.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de eliminar esta bicicleta?\")'>
            <i class='fa-regular fa-trash-can'></i>
        </a>
        </td>";
      echo "</tr>";
        
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No hay bicicletas registradas.</p>';
}
}
$conexcion->close();
?>
