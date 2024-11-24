<?php
function uploadFile($file) {
    // Directorio donde se guardarán los archivos subidos
    $uploadDir = 'uploads/'; // Cambia esto a tu carpeta de destino
    $uploadFile = $uploadDir . basename($file['name']);
    
    // Verificar si hay un error en la carga del archivo
    if ($file['error'] == 0) {
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            return $file['name']; // Retorna el nombre del archivo si se subió correctamente
        } else {
            echo "Error al cargar el archivo.";
            return false;
        }
    }
    return false;
}
?>
