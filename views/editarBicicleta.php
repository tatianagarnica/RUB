<?php
include '../php/registribici_tipo.php' ?>
<?php
include '../php/editar_bici.php' ?>
<?php
include '../php/editar_base.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/detalle.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Editar una bicicleta</title>
</head>
<script>
        document.getElementById('numero_documento').addEventListener('input', function() {
    let numero_documento = this.value;
    
    if (numero_documento.length >= 6) {  // Ejemplo de validación para el número de documento
        fetch('../php/verificar_usuario.php?numero_documento=' + numero_documento)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('nombre_dueño').value = data.nombre;
                    document.getElementById('nombre_dueño').style.display = 'block';
                } else {
                    alert('El número de identificación no está registrado.');
                    document.getElementById('nombre_dueño').style.display = 'none';
                }
            })
            .catch(error => console.error('Error:', error));
    } else {
        document.getElementById('nombre_dueño').style.display = 'none';
    }
});

    </script>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand"><img src="../images/logo.png" alt="Rub" width="80" height="70"> </a>
          <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bicicleta
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../views/registrarBicicleta.html">Registrar</a></li>
                <li><a class="dropdown-item" href="../views/editarBicicleta.html">Editar</a></li>
                <li><a class="dropdown-item" href="../views/verlistadobicicleta.html">Ver</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Traspaso propiedad
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../views/registrarTraspaso.html">Registrar</a></li>
                    <li><a class="dropdown-item" href="../views/verlistatraspaso.html">Ver</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Reportar perdida
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../views/registrarPerdida.html">Registrar</a></li>
                    <li><a class="dropdown-item" href="../views/verlistaperdidas.html">Ver</a></li>
                </ul>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                <button class="btn btn-outline-success me-1" type="submit"><i class="fas fa-search"></i></button>
                <div class="dropdown">
                    <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../images/5.jpeg" class="user-photo" alt=""></a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li class="dropdown-item">
                            <h2>Juan Manuel</h2>
                        </li>
                        <hr>
                      <li><a class="dropdown-item" href="../views/perfil.html"> <p><i class="fa-solid fa-user"></i>Ver perfil</p> </a></li>
                      <li><a class="dropdown-item" href="../views/editarPerfil.html"><p><i class="fa-solid fa-user"></i>Editar perfil </p></a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="../views/welcome.html"><p><i class="fa-solid fa-right-from-bracket"></i>cerrar Sesion</p></a></li>
                    </ul>
                </div>
          </form>
        </div>
    </nav>
    <div class="container">
    <div class="borde">
    <div class="borde">
    <form  method="POST" action="../php/editar_bici.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($bicicleta['id']); ?>">



        <div class="row mx-3">
            <div class="col-12 col-md-3 col-lg-3 mt-1">
                <img src="../images/logo.png" width="150" height="150" alt="">
            </div>
            <div class="col-12 col-md-9 col-lg-9 mt-4">
                <h2>Editar una bicicleta</h2>
            </div>
        </div>
        
        <div class="row mt-3 mx-1">
            <div class="col-12 col-md-12 col-lg-4">
                <label for="tipo_bicicleta">Tipo de Bicicleta</label>
                <select class="form-select" name="tipo_bicicleta" id="tipo_bicicleta">
                    <option value="">Seleccione un tipo</option>
                    <?php
                    foreach ($tipos_bicicleta as $tipo) {
                        $selected = ($bicicleta['tipo_bicicleta'] == $tipo) ? 'selected' : '';
                        echo "<option value='" . htmlspecialchars($tipo) . "' $selected>" . htmlspecialchars($tipo) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="referencia">Nº De referencia</label>
                <input class="form-control" id="referencia" name="referencia" type="text" 
                    value="<?php echo htmlspecialchars($bicicleta['referencia']); ?>" 
                    placeholder="Nº De referencia">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="fecha_adquisicion">Fecha de adquisición</label>
                <input class="form-control" id="fecha_adquisicion" name="fecha_adquisicion" type="date" 
                    value="<?php echo htmlspecialchars($bicicleta['fecha_adquisicion']); ?>" 
                    placeholder="fecha_adquisicion">
            </div>
        </div>

        <div class="row mt-3 mx-1">
            <div class="col-12 col-md-12 col-lg-1">
                <label for="color" class="form-label">Color</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" 
                    value="<?php echo htmlspecialchars($bicicleta['color']); ?>" 
                    title="Choose your color">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <label for="numero_rin">Nº Rin</label>
                <input class="form-control" id="numero_rin" name="numero_rin" type="text" 
                    value="<?php echo htmlspecialchars($bicicleta['numero_rin']); ?>" 
                    placeholder="Nº Rin">
            </div>
            <div class="col-12 col-md-12 col-lg-5">
                <label for="marca">Marca</label>
                <select class="form-select" name="marca" id="marca">
                    <option value="">Seleccione una marca</option>
                    <option value="Specialized" <?php echo $bicicleta['marca'] == 'Specialized' ? 'selected' : ''; ?>>Specialized</option>
                    <option value="Canyon" <?php echo $bicicleta['marca'] == 'Canyon' ? 'selected' : ''; ?>>Canyon</option>
                    <option value="Scott" <?php echo $bicicleta['marca'] == 'Scott' ? 'selected' : ''; ?>>Scott</option>
                </select>
            </div>
        </div>

        <div class="row mt-3 mx-1">
            <div class="col-12 col-md-12 col-lg-4">
                <label for="valor">Valor</label>
                <input class="form-control" id="valor" name="valor" type="text" 
                    value="<?php echo htmlspecialchars($bicicleta['valor']); ?>" 
                    placeholder="Valor">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="nombre_completo">Nombre del dueño</label>
                <input class="form-control" id="nombre_completo" name="nombre_completo" type="text" 
                value="<?php echo isset($bicicleta['nombre_completo']) ? htmlspecialchars($bicicleta['usuario_id']) : ''; ?>" 
                placeholder="Nombre del dueño" >
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="numero_documento">Nº de identificación</label>
                <input class="form-control" id="numero_documento" name="numero_documento" type="text" 
                value="<?php echo isset($bicicleta['numero_documento']) ? htmlspecialchars($bicicleta['usuario_id']) : ''; ?>" 
                placeholder="Nº de identificación" >
            </div>
        </div>
        <div class="my-3 mx-3 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
            <button class="btn btn-success" type="submit">Guardar</button>
            
                <button class="btn btn-danger" type="button">Cancelar</button>
            
        </div>
    </form>
</div>

    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>