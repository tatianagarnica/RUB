<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/categorias.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>categorias</title>
</head>
<body>
    
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand"><img src="../images/logo.png" alt="Rub" width="80" height="70"> </a>
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
    <div class="container dropdown">
            <div id="card" class="card mt-3" style="width: 12rem; height: 14rem;">
                <div class="card-body">
                    <h5 class="d-flex justify-content-center"><i class="fa-solid fa-bicycle cate"></i></h5>
                        <h6 class="mb-3 text-center"><a>Bicicleta</a></h6>
                <a href="../views/registrarBicicleta.php" style="text-decoration: none;" class="card-link">Registrar</a>
                <a href="../views/verlistadobicicleta.php" style="text-decoration: none;" class="card-link">ver listado</a>
                </div>
            </div>

            <div id="card" class="card mt-3 mx-3" style="width: 12rem; height: 14rem;">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center"><i class="fa-solid fa-share-from-square cate"></i></h5>
                        <h6 class="mb-3 text-center"><a>Traspaso propiedad</a></h6>
                <a href="../views/registrarTraspaso.php" style="text-decoration: none;" class="card-link">Registrar</a>
                <a href="../views/verlistatraspaso.php" style="text-decoration: none;" class="card-link">ver listado</a>
                </div>
            </div>
            
            <div id="card" class="card mt-3" style="width: 12rem; height: 14rem;">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center"><i class="fa-solid fa-triangle-exclamation cate"></i></h5>
                        <h6 class="mb-3 text-center"><a>Reportar perdida</a></h6>
                <a href="../views/registrarPerdida.php" style="text-decoration: none;" class="card-link">Registrar</a>
                <a href="../views/verlistaperdidas.php" style="text-decoration: none;" class="card-link">ver listado</a>
                </div>
            </div>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

      <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
      </script>


</body>
</html>