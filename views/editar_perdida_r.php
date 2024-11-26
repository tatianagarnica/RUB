<?php
// Incluir la conexión a la base de datos
include '../php/editar_base_perdida.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/registrarbicicleta.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../css/nav.css">
    <title>Registrar una perdida</title>
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
            <div class="col-12 col-md-3 col-lg-3 mt-1">
                <img src="../images/logo.png" width="150" height="150" alt="">
            </div>
            <div class="col-12 col-md-9 col-lg-9 mt-4">
                <h2>Registrar una perdida</h2>
            </div>
        </div>
        


    <form method="POST" action="../php/editar_perdida.php" enctype="multipart/form-data">
    <input type="hidden" name="registro_id" value="<?php echo htmlspecialchars($row['id']); ?>">
        <div class="row mt-3">
            <div class="col-12 col-md-12 col-lg-6">
            

               
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <label for="Nº De referencia">Nº De referencia</label>
                <input class="form-control" name= "referencia"id="referencia" value="<?php echo htmlspecialchars($row['referencia']); ?>" type="text" placeholder="Nº De referencia" aria-label="default input example">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-12 col-lg-4">
                <label for="date">Feche del reporte</label>
                <input class="form-control" name="fecha_reporte" id="fecha_reporte" value="<?php echo htmlspecialchars($row['fecha_perdida']); ?>" type="date" placeholder="fecha reporte" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="date">fecha de la perdida</label>
                <input class="form-control" name="fecha_perdida" id="fecha_perdida" value="<?php echo htmlspecialchars($row['fecha_reporte']); ?>" type="date" placeholder="fecha de la perdida" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Direccion">Direccion exacta</label>
                <input class="form-control" name="direccion"id="direccion" value="<?php echo isset($row['direccion']) ? htmlspecialchars($row['direccion']) : ''; ?>" type="text" placeholder="Direccion" aria-label="default input example">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-12 col-lg-4">
                <label for="tipodocumento">Tipo del documento</label>
                <select class="form-select" name="tipo_documento" id="tipo_documento" value="<?php echo htmlspecialchars($row['tipo_documento']); ?>" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">RC</option>
                    <option value="2">CC</option>
                    <option value="3">NIT</option>
                </select>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Nºdeidentificacion">Nº de identificacion</label>
                <input class="form-control"  name="numero_documento"id="numero_documento" value="<?php echo htmlspecialchars($row['numero_documento']); ?>" type="text" placeholder="Nºdeidentificacion" aria-label="default input example">
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <label for="Nombre del dueño"></label>
                <input class="form-control" id="nombre_completo" type="text" placeholder="Nombre del dueño" value="<?php echo htmlspecialchars($row['nombre_completo']); ?>" aria-label="default input example">
            </div>
            
        </div>
        <div class="mb-3 mt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Breve descrpcion de la perdida</label>
            <textarea name="detalle" id= "detalle"class="form-control" id="exampleFormControlTextarea1"<?php echo htmlspecialchars($row['detalle']); ?> rows="3"></textarea>
        </div>

        <div class="mt-4 mx-4 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
            <button class="btn btn-success"  type="submit">Guardar</button>
            <a href="../views/categorias.html">
                <button class="btn btn-danger" type="button">Cancelar</button>
            </a>
        </div>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="../js/ALERTAS.JS"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>

</body>
</html>