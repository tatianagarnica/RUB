<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/nav.css">
    <title>registrar datos provedor</title>
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
        <div class="row">
            <div class="col-3 mt-1">
                <img src="../images/logo.png" width="150" height="150" alt="">
            </div>
            <div class="col-9 mt-4">
                <h2>Registrar tus Datos Empresa</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="Nombre completo">Nombre Empresa</label>
                <input class="form-control" id="nombre" type="text" placeholder="Nombre completo" aria-label="default input example">
            </div>
            <div class="col-6">
                <label for="Numerocelular"></label>
                <input class="form-control" id="Numerocelular" type="text" placeholder="Numero de celular" aria-label="default input example">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="Nit">Nit</label>
                <input class="form-control" id="tipodocumento" type="text" placeholder="Nit" aria-label="default input example">
            </div>
            <div class="col-6">
                <label for="Numero de documento"></label>
                <input class="form-control" id="NumeroDocumento" type="text" placeholder="Numero de documento" aria-label="default input example">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="Departamento"></label>
                <input class="form-control" id="Departamento" type="text" placeholder="Departamento" aria-label="default input example">
            </div>
            <div class="col-4">
                <label for="Municipio"></label>
                <input class="form-control" id="Municipio" type="text" placeholder="Municipio" aria-label="default input example">
            </div>
            <div class="col-4">
                <label for="Direccion"></label>
                <input class="form-control" id="Direccion" type="text" placeholder="Direccion" aria-label="default input example">
            </div>
        </div>
        <div class="mt-4">
            <label for="formFileSm" class="form-label">Selesione una foto</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>

        <div class="mt-4 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
            <a href="../views/categorias.html">
                <button class="btn btn-success" type="button">Guardar</button>
            </a>
            <a href="../views/roles.html">
                <button class="btn btn-danger" type="button">Cancelar</button>
            </a>
          </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>