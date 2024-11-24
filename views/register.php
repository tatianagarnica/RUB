<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/REGISTRARSE.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>register</title>
        <script>
           
        document.querySelector('form').addEventListener('submit', function(e) {
        var password = document.querySelector('input[name="contrasena"]').value;
        var confirmPassword = document.querySelector('input[name="confirmar_contrasena"]').value;

        if (password !== confirmPassword) {
            e.preventDefault(); // Prevenir el envío del formulario
            alert("Las contraseñas no coinciden.");
        }
    });
</script>

    </head>
    <body>
        <div class="container-form register">
            <div class="information">
                <div class="info-childs">
                    <img src="../images/logo.png" width="70%" alt="">
                    <h2>Bienvenido</h2>
                    <p>Para unirte a nuestra comunidad por favor Iniciar sesión con tus datos</p>
                    <a href="../views/login.html"><input type="button" value="Iniciar sesión" id="sign-in"></a>
                </div>
            </div>
            <div class="form-information">
                <div class="form-information-childs">
                    <h2>Crear una cuenta</h2>
                    <?php if (!empty($error_message)) : ?>
                        <div style="color: red; font-weight: bold; margin-bottom: 10px;">
                        <?= htmlspecialchars($error_message); ?>
                        </div>
                <?php endif; ?>
                    <form class="form" method="POST" action="../php/registropaso1.php" enctype="multipart/form-data"> 
                        <label>
                            <i class='bx bx-user'></i>
                            <input type="text" name="nombre_completo" placeholder="nombre completo"required>
                        </label>
                        <label>
                            <i class='bx bx-envelope' ></i>
                            <input type="email" name="correo" placeholder="Email"required>
                        </label>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" name="contrasena" placeholder="Contraseña" class="form-control is" id="validationServer02" required>
                        </label>
                        <div id="passwordHelpBlock" class="form-text">
                            <p style="font-size: small;">Su contraseña debe tener entre 8 y 10 caracteres,<br>contener letras y números.</p>
                        </div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password"name="confirmacion_contrasena" placeholder="Confirmar Contraseña">
                        </label>

                        
                            <button class="btn btn-outline-dark mt-5" type="submit">Registrar</button>
                        
                    </form>
                </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="../js/login.js"></script>
    </body>

</html>