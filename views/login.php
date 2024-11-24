<?php
include '../php/login_rub.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/registrarbicicleta.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Recuperacion de contraseña</title>
</head>
<body>
    <div class="container-form login" id="login">
        <div class="information">
            <div class="info-childs">
                <img src="../images/logo.png" width="70%" alt="">
                <h2>¡¡Bienvenido!!</h2>
                <p>Si aún no tienes una cuenta por favor regístrese aquí</p>
                <a href="../views/register.html"><input type="button" value="Regístrarse" id="sign-up"></a>
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <form class="form" method="POST" action="../php/login_rub.php" enctype="multipart/form-data" > 
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="correo" name=correo id=correo placeholder="Email">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name=contrasena id=contrasena class="form-control " required>
                    </label>
                    <div id="passwordHelpBlock" class="form-text">
                        <p>
                            Su contraseña debe tener entre 8 y 10 caracteres,<br>contener letras y números.
                        </p>
                    </div>
                    <div>
                        <a href="#" class="cta" id="open">¿Olvidaste la contraseña?</a>
                    </div>
                    <a  class="text-end text-wrap">                   
                         <button class="btn btn-dark" type="submit">Iniciar Seccion</button>
                    </a>
                    
                </form>
            </div>
        </div>

    <div class="modal-container" id="modal_container">
        <div class="container modal-close">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 mt-1">
                    <img src="../images/logo.png" width="150" height="150" alt="">
                </div>
                <div class="col-12 col-md-9 col-lg-9 mt-4">
                    <h2>Recuperacion de contraseña</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="correo">Ingresa el correo para enviar el codigo</label>
                    <input class="form-control" id="correo" type="text" placeholder="correo" aria-label="default input example">
                </div>  
            </div>
            
    
            <div class="mt-4 mx-4 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
                    <button class="btn btn-success abrir" class="abrir"  type="button">Enviar</button>
                <a href="#">
                    <button class="close btn btn-danger" class="close" id="close" type="button">Cancelar</button>
                </a>
            </div>
        </div>
    </div>

    <div class="modal-container1" id="modal_container">
        <div class="container1 modal-close1">
            <div class="row mx-3">
                <div class="col-12 col-md-3 col-lg-3 mt-1">
                    <img src="../images/logo.png" width="150" height="150" alt="">
                </div>
                <div class="col-12 col-md-9 col-lg-9 mt-4">
                    <h2>Recuperacion de contraseña</h2>
                </div>
            </div>
            <p></p>
            <div class="row mx-3">
                <div class="col-12">
                    <label for="codigo">Ingresa el codigo que fue enviado al correo</label>
                    <input class="form-control" id="codigo" type="text" placeholder="codigo" aria-label="default input example">
                </div>  
            </div>
            
    
            <div class="mt-4 mx-4 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
                    <button class="btn btn-success abrir2" class="abrir2"  type="button">Verificar</button>
                <a href="#">
                    <button class="close1 btn btn-danger" class="" id="close" type="button">Cancelar</button>
                </a>
            </div>
        </div>
    </div>

    <div class="modal-container2">
        <div class="container2 modal-close2 mt-5">
            <div class="row mx-3">
                <div class="col-12">
                    <label for="password">Ingresa nueva contraseña</label>
                    <input class="form-control" id="contrasena" type="password" placeholder="contraseña" aria-label="default input example">
                </div> 
                <div class="col-12">
                    <label for="password">Verificar contraseña</label>
                    <input class="form-control" id="confirmacion_contrasena" type="password" placeholder="contraseña" aria-label="default input example">
                </div>  
            </div>
            
    
            <div class="mt-4 mx-4 d-grid gap-2 d-md-block d-md-flex justify-content-md-end">
                <a href="../views/login.html">
                    <button class="btn btn-success" id="btn-guardar" type="button">Guardar</button>
                </a>
                <a href="../views/login.html">
                    <button class="btn btn-danger" type="button">Cancelar</button>
                </a>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="../js/ALERTASContraseña.JS"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/modal.js"></script>

</body>
</html>