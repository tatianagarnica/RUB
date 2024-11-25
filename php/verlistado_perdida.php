<?php
// Incluir la conexión a la base de datos
include '../conexion/conexion.php';


// Consultar las bicicletas registradas
$query = "SELECT rp.id, b.referencia, rp.fecha_perdida, rp.estado 
FROM registro_perdida rp
INNER JOIN bicicletas b ON rp.bicicletas_id = b.id";

$contador = 1;

// Arreglo para almacenar las bicicletas con índice personalizado
$bicicletas = [];

if ($result = $conexcion->query($query)) {
    $result->num_rows > 0;
    
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>#</th>';
    echo '<th>Referencia</th>';
    echo '<th>Fecha Perdida</th>';
    echo '<th>Estado</th>';
    echo '<th style="padding-left:1%;">Operaciones</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Mostrar los resultados
    while ($row = $result->fetch_assoc()) {
        $row['numero_registro'] = $contador;
        $bicicletas[] = $row;
        $contador++;

        // Formulario para actualizar el estado
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['numero_registro']) . '</td>';
        echo '<td>' . htmlspecialchars($row['referencia']) . '</td>';
        echo '<td>' . htmlspecialchars($row['fecha_perdida']) . '</td>';

        // Desplegable para cambiar el estado
        echo '<td>';
        echo '<form action="../php/editarestado_perdida.php" method="POST">';
        echo '<input type="hidden" name="registro_id" value="' . $row['id'] . '">';
        echo '<select name="estado" class="form-select" onchange="this.form.submit()">'; 
        echo '<option value="Perdido" ' . ($row['estado'] == 'PERDIDO' ? 'selected' : '') . '>Perdido</option>';
        echo '<option value="Recuperado" ' . ($row['estado'] == 'RECUPERADO' ? 'selected' : '') . '>Recuperado</option>';
        echo '<option value="Ninguno" ' . ($row['estado'] == 'NINGUNO' ? 'selected' : '') . '>Ninguno</option>';
        echo '</select>';
        echo '</form>';
        
        echo '</td>';

        // Operaciones de editar y eliminar
        echo '<td>';
        echo "<a href='../views/editarBicicleta.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>
                <i class='fa-solid fa-pen-to-square '></i>
            </a>";
        echo "<a href='../php/eliminarBicicleta.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de eliminar esta bicicleta?\")'>
                <i class='fa-regular fa-trash-can'></i>
            </a>";
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No hay bicicletas registradas.</p>';
}

$conexcion->close();
?>

