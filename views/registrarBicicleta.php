
<?php
include '../php/registribici_tipo.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/registrarbicicleta.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="/scripts/jquery.min.js"></script>
    <title>Registrar una bicicleta</title>
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
    
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand"><img src="../images/logo.png" alt="Rub" width="80" height="70"> </a>
          <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bicicleta
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../views/registrarBicicleta.php">Registrar</a></li>
                <li><a class="dropdown-item" href="../views/editarBicicleta.php">Editar</a></li>
                <li><a class="dropdown-item" href="../views/verlistadobicicleta.php">Ver</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Traspaso propiedad
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../views/registrarTraspaso.php">Registrar</a></li>
                    <li><a class="dropdown-item" href="../views/verlistatraspaso.php">Ver</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Reportar perdida
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../views/registrarPerdida.php">Registrar</a></li>
                    <li><a class="dropdown-item" href="../views/verlistaperdidas.php">Ver</a></li>
                </ul>
            </div>
            <form class="d-flex" role="search" >
                <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                <button class="btn btn-outline-success me-1" type="submit"><i class="fas fa-search"></i></button>
                <div class="dropdown">
                    <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../images/5.jpeg" class="user-photo" alt=""></a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li class="dropdown-item">
                            <h2>Juan Manuel</h2>
                        </li>
                        <hr>
                      <li><a class="dropdown-item" href="../views/perfil.php"> <p><i class="fa-solid fa-user"></i>Ver perfil</p> </a></li>
                      <li><a class="dropdown-item" href="../views/editarPerfil.php"><p><i class="fa-solid fa-user"></i>Editar perfil </p></a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="../views/welcome.php"><p><i class="fa-solid fa-right-from-bracket"></i>cerrar Sesion</p></a></li>
                    </ul>
                </div>
          </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-19 col-md-3 col-lg-3 mt-1">
                <img src="../images/logo.png" width="150" height="150" alt="">
            </div>
            <div class="col-12 col-md-9 col-lg-9 mt-4" >
                <h2>Registrar una bicicleta</h2>
            </div>
        </div>
        <form method="POST" action="../php/registrobici.php" enctype="multipart/form-data">
        <div class="row mt-3" >
        <div class="col-12 col-md-12 col-lg-4">
            <label for="tipo_bicicleta">Tipo de Bicicleta</label>
            <select class="form-select" name="tipo_bicicleta" id="tipo_bicicleta">
                <option selected value="">Seleccione un tipo</option>
                <?php
                foreach ($tipos_bicicleta as $tipo) {
                    echo "<option value='" . htmlspecialchars($tipo) . "'>" . htmlspecialchars($tipo) . "</option>";
                }
                ?>
            </select>
        </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Nº De referencia">Nº De referencia</label>
                <input class="form-control" name="referencia" id="referencia" type="text" placeholder="Nº De referencia" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="date">fecha</label>
                <input class="form-control" name="fecha_adquisicion" id="fecha_adquisicion" type="date" placeholder="fecha" aria-label="default input example">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-12 col-lg-1">
                <label for="exampleColorInput" class="form-label">Color</label>
                <input type="color" class="form-control form-control-color"name="color" id="color"  value="" title="Choose your color">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <label class="mt-1" for="Nº Rin">Nº Rin</label>
                <input class="form-control" name=numero_rin id=numero_rin type="text" placeholder="Nº Rin" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-5">
                <label class="mt-1" for="Nº Rin">Marca</label>
                <select class="form-select" name="marca" id="marca" aria-label="Default select example">
                    <option selected></option>
                    <option value="Specialized">Specialized</option>
                    <option value="Canyon">Canyon</option>
                    <option value="Scott">Scott</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Valor">Valor</label>
                <input class="form-control" name="valor" id="valor" type="text" placeholder="Valor" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Nombre del dueño">Nombre del dueño</label>
                <input class="form-control" id="Nombre del dueño" type="text" placeholder="Nombre del dueño" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Nº de identificacion">Nº de identificacion</label>
                <input class="form-control" name="numero_documento" id="numero_documento" type="text" placeholder="Nº de identificacion" aria-label="default input example">
            </div>

        </div>
        <div class="mt-3 gap-2 d-md-block d-md-flex justify-content-end btn1">
            <button class="btn btn-success" type="submit">Guardar</button>
            <a href="../views//categorias.php"><button type="button" class="btn btn-danger" >Cancelar</button></a>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>