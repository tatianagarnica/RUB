function toggleArchivo() {
    const tipoPersona = document.getElementById('tipo_persona').value;
    const archivoField = document.getElementById('archivo_field');
    if (tipoPersona === 'Jurídica') {
        archivoField.style.display = 'none'; // Oculta el campo
    } else {
        archivoField.style.display = 'block'; // Muestra el campo
    }
}

// Llamar a la función al cargar la página para asegurarse del estado correcto
document.addEventListener('DOMContentLoaded', toggleArchivo);