<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/narvar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>RUB</title>
</head>
<body class="body xs-0">
    <nav class="navbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <a class="navbar-brand">
                  <img  width="30%" height="80%" src="../images/logo.png" alt="" srcset="">  
              </a>
            </div>
            <div class="col-lg-4 mt-4">
              <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
            </div>
            <div class="col-lg-2 mt-4">
              <button class="btn btn-outline-success me-1" type="submit"><i class="fas fa-search"></i></button>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="../views/login.php" class="login-button border border-dark btn-outline-darck">Iniciar Sesión</a>
              <a href="../views/register.php" class="register-button border border-dark btn-outline-darck">Registrate</a>
          </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner slide">
          <div class="carousel-item active d-item">
            <img src="../images/29.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-md-block" id="color-text">
              <h5>¡Bienvenidos a nuestra página!</h5>
              <p>Nos alegra tenerte aquí y formar parte de esta hermosa comunidad.</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="../images/9.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption  d-md-block">
              <p class="color">Queremos que este espacio sea una herramienta útil para ti, donde puedas descubrir los beneficios del registro de bicicletas.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/3.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption  d-md-block">
              <p class="color1">cómo juntos podemos contribuir a ciudades más amigables para el ciclismo.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="nosotros my-3" id="nosotros">
        <div class="container">
            <div class="row g-2 ">
                <h2 class="text-center my-3">Quienes somos</h2>
                <div class="col-12 col-md-12 col-lg-6">
                    <img class="img-fluid ms-3" width="300" height="300" src="../images/logo.png" alt="" srcset="">
                </div>
                <div class="col-12 mt-auto col-md-12 col-lg-6">
                    <p>Si eres propietario de una bicicleta o estás pensando en comprar uno, seguramente sabes que el registro es uno de los trámites más importantes que debes hacer para garantizar que la compra sea legal, para garantizar la seguridad en las carreteras y cumplir con la normatividad del país.</p>
                </div>
                <h2 class="text-center my-3">Mision</h2>
                <div class="col-12 col-md-12 col-lg-6">
                    <p>Nuestra misión es fomentar una movilidad más segura, sostenible y equitativa, promoviendo el uso responsable de la bicicleta como medio de transporte ecológico, saludable y accesible. A través de nuestra plataforma de registro único de bicicletas que otorga a cada bicicleta una identidad digital. Esto facilita la identificación en caso de
                        robo o pérdida, mejorando las posibilidades de recuperación y reduciendo el mercado ilegal de bicicletas.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img class="img-fluid ms-3" width="300" height="300" src="../images/mision (1).png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="../js/login.js"></script>
</body>
</html>