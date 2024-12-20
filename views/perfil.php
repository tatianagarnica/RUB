<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/nav.css">
    <title>perfil</title>
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
                      <li><a class="dropdown-item" href="../views/perfil.php"> <p><i class="fa-solid fa-user"></i>Ver perfil</p> </a></li>
                      <li><a class="dropdown-item" href="../views/editarPerfil.php"><p><i class="fa-solid fa-user"></i>Editar perfil </p></a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" ><p><i class="fa-solid fa-right-from-bracket" href="../php/logout.php"></i>cerrar Sesion</p></a></li>
                    </ul>
                </div>
          </form>
        </div>
    </nav>

    <div class="tarjeta">
        <div class="header">
                <div class="borde">
                    <a href="../views/categorias.html" id="clouse"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>
            <div class="">
                <img src="../images/1.jpeg" id="perfil" alt="">

            </div>
        
            <h3 id="text1">Juan Manuel aly torrez mendez </h3>

        <div class="tabla">
            <div class="row g-2 mt-5">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="stats">
                        <p class="texto"><i class="fa-solid fa-location-dot"></i> Cudinamarca</p>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="stats">
                        <p class="texto"><i class="fa-solid fa-location-dot"></i> Girardot</p>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="stats">
                        <p class="texto"><i class='bx bx-home' ></i> Manzana c casa 12 barrio veinte de julio</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="stats">
                        <p class="texto"><i class='bx bx-edit'></i>Tipo de identificacion</p>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="stats">
                        <p class="texto"><i class='bx bx-id-card' ></i>Nº de identificacion</p>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="stats">
                        <p class="texto"><i class='bx bx-mobile-alt'></i>Nº de celular</p>
                    </div>
                </div>
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-3" type="button">Editar</button>
                <a href="../views/editarPerfil.html">
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>