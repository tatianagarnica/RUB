<?php
include '../php/detallle_bici.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/detalle.css">
    <link rel="stylesheet" href="../css/nav.css">
    <title>card</title>
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
                <li><a class="dropdown-item" href="../views/registrarBicicleta.php>Registrar</a></li>
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
        <div class="borde">
            <h3 class="text-center">REGISTRO UNICO DE LA BICICLETA</h3>
            <img  src="../images/logo.png" id="logo" alt="">
            <div class="row">
                <div class="col-4">
                    <h6>ID</h6>
                    <p><?= htmlspecialchars($bicicleta['id']) ?></p>
                </div>
                <div class="col-4">
                    <h6>Referencia</h6>
                    <p><?= htmlspecialchars($bicicleta['referencia']) ?></p>
                </div>
                <div class="col-4">
                    <h6>Tipo de Bicicleta</h6>
                    <p><?= htmlspecialchars($bicicleta['tipo_bicicleta']) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h6>Nº de Rin</h6>
                    <p><?= htmlspecialchars($bicicleta['numero_rin']) ?></p>
                </div>
                <div class="col-4">
                    <h6>Color</h6>
                    <p><?= htmlspecialchars($bicicleta['color']) ?></p>
                </div>
                <div class="col-4">
                    <h6>Marca</h6>
                    <p><?= htmlspecialchars($bicicleta['marca']) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h6>Fecha de Adquisición</h6>
                    <p><?= htmlspecialchars($bicicleta['fecha_adquisicion']) ?></p>
                </div>
                <div class="col-5">
                    <h6>Dueño</h6>
                    <p><?= htmlspecialchars($bicicleta['dueño']) ?></p>
                </div>
                <div class="col-3">
                    <h6>Identificación</h6>
                    <p><?= htmlspecialchars($bicicleta['numero_documento']) ?></p>
                </div>
            </div>
                <div class="d-md-flex justify-content-md-end">
                    <a href="../views/verlistadobicicleta.php" class="text-end text-wrap">                   
                         <button class="btn btn-dark" type="button">Regresar</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</body>
</html>