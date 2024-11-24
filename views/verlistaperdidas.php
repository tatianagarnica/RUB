<?php
include '../php/registribici_tipo.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/bicicleta.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/nav.css">
    <title>verlistadobicicleta</title>
</head>
<script>
        // Realizar la solicitud al backend
        fetch('../php/verlistado_perdida.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('bicicletas-list').innerHTML = data;
            })
            .catch(error => {
                console.error('Error al cargar la lista de bicicletas:', error);
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
        <?php if ($result->num_rows > 0): ?>
            <table class="table">
            <table class="table table-hover">
                </thead>
                <tbody id="bicicletas-list">
                <?php if (!empty($bicicletas)): ?>
                    <?php foreach ($bicicletas as $bicicleta): ?>
        
                        <tr>
                        <td><?= htmlspecialchars($bicicleta['numero_registro']); ?></td>
                        <td><?= htmlspecialchars($bicicleta['referencia']); ?></td>
                        <td><?= htmlspecialchars($bicicleta['fecha_perdida']); ?></td>
                        <td><?= htmlspecialchars($bicicleta['estado']); ?></td>
                        <td>
                            <!-- Íconos para operaciones -->
                          
                            <a href="../views/editarBicicleta.php?id=<?= $row['id'] ?>" id="borde" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="../php/eliminarBicicleta.php?id=<?= $row['id'] ?>" id="borde" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta bicicleta?')">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
            <tr>
                <td colspan="8">No hay bicicletas registradas.</td>
            </tr>
        <?php endif; ?>
    </tbody> 
    <?php endif; ?>


     </table>
            <div class="d-md-flex justify-content-md-end">
                <a href="../views/categorias.php" class="text-end text-wrap">                   
                     <button class="btn btn-dark" type="button">Regresar</button>
                </a>
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