<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>resgistrar los datos personales</title>
    <script>
    function toggleArchivo() {
        // Obtener referencias a los elementos
        const archivoField = document.getElementById('archivo_field');
        const personaNatural = document.getElementById('flexRadioDefault1');
        const personaJuridica = document.getElementById('flexRadioDefault2');

        // Mostrar u ocultar el campo de archivo según la selección
        if (personaJuridica.checked) {
            archivoField.style.display = 'block'; // Muestra el campo
        } else {
            archivoField.style.display = 'none'; // Oculta el campo
        }
    }

    // Inicializa el comportamiento según el estado inicial
    window.onload = function() {
        toggleArchivo();
    };
    </script>

</head>
<body>

    <div class="container">
        <div class="row mb-2">
            <div class="col-3 mt-1">
                <img src="../images/logo.png" width="150" height="150" alt="">
            </div>
            <div class="col-9 mt-4">
                <h2>Registrar tus Datos personales</h2>
            </div>
        </div>
        <form method="POST" action="../php/registropaso2.php" enctype="multipart/form-data" >
        <div class="row mb-2">
            <div class="col-6">
                <label for="Nombre completo">Nombre usuario o Nombre de la empresa</label>
                <input class="form-control" id="nombre" type="text"name="nombre_usuario" id="user" placeholder="Nombre usuario" aria-label="default input example">
            </div>
            <div class="col-6">
                <label for="Numerocelular">Numero celular</label>
                <input class="form-control" id="celular" name="numero_celular"type="text" placeholder="Numero de celular" aria-label="default input example">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6">
                <label for="Tipo de documento">Tipo de documento</label>
                <select class="form-select" name="tipo_documento" id="tipo_documento" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">RC</option>
                    <option value="2">CC</option>
                    <option value="3">NIT</option>
                </select>
            </div>
            <div class="col-6">
                <label for="Numero de documento">Numero Documento</label>
                <input class="form-control" id="numero_documento" type="text" name="numero_documento"  placeholder="Numero de documento" aria-label="default input example"required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-4"> 
                <label for="Departamento">Departamento</label>
                <input class="form-control"  type="text" name="departamento_actual" id="departamento_actual" placeholder="Departamento" aria-label="default input example"required>
            </div>
            <div class="col-4">
                <label for="Municipio">Municipio</label>
                <input class="form-control" id="municipio_actual" type="text"name="municipio_actual"  placeholder="Municipio" aria-label="default input example"required>
            </div>
            <div class="col-4">
                <label for="Direccion">Direccion</label>
                <input class="form-control"  type="text" name="direccion" id="direccion" placeholder="Direccion" aria-label="default input example"required>
            </div>
        </div>
        <div class="mt-3">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="tipo_persona" value="Persona Natural" id="flexRadioDefault1" onchange="toggleArchivo()" checked>
        <label class="form-check-label" for="flexRadioDefault1">
            Persona Natural
        </label>
    </div>

    <div class="form-check">
        <input  class="form-check-input"  type="radio" name="tipo_persona" value="Persona Jurídica" id="flexRadioDefault2" onchange="toggleArchivo()">
        <label class="form-check-label" for="flexRadioDefault2">
            Persona Jurídica
        </label>
    </div>
</div>
        <div class="mt-4" id="archivo_field" style="display: none;">
            <label for="formFileSm" class="form-label">Seleccione Rut</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="archivo" id="archivo">
        </div>
            <div class="mt-4 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
            <button class="btn btn-success" type="submit">Guardar</button><a href="../views//categorias.php">
                <button class="btn btn-danger" type="button">Cancelar</button></a>
    
          </div>
        </form>
    </div>
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>