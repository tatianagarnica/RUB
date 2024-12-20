<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bicicleta.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>verlistatraspaso</title>
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

            <table class="table table-hover">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Referencia</th>
                      <th scope="col">Nuevo Dueño</th>
                      <th scope="col">Fecha de Traspaso</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">001</th>
                        <td>01o98</td>
                        <td>Juan felipe Florero flores</td>
                        <td>22/10/2024</td>
                        <td>ningun reporte</td>
                        <td>
                            <a href="../views/detalle.html" id="borde"><i class="fa-solid fa-eye"></i></a>
                            <a href="../views/editarBicicleta.html" id="borde"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" id="borde"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">001</th>
                        <td>01o98</td>
                        <td>Juan felipe Florero flores</td>
                        <td>22/10/2024</td>
                        <td>ningun reporte</td>
                        <td>
                            <a href="../views/detalle.html" id="borde"><i class="fa-solid fa-eye"></i></a>
                            <a href="../views/editarBicicleta.html" id="borde"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" id="borde"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">001</th>
                        <td>01o98</td>
                        <td>Juan felipe Florero flores</td>
                        <td>22/10/2024</td>
                        <td>ningun reporte</td>
                        <td>
                            <a href="../views/detalle.html" id="borde"><i class="fa-solid fa-eye"></i></a>
                            <a href="../views/editarBicicleta.html" id="borde"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" id="borde"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-md-flex justify-content-md-end">
                <a href="../views/categorias.html" class="text-end text-wrap">                   
                     <button class="btn btn-dark" type="button">Regresar</button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>