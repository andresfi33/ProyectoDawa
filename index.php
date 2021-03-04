<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <!-- FIN BOOTSTRAP -->
    <title>Principal</title>
</head>

<body>
    <?php
    require 'Usuario.php';
    //Utilizar las sesiones.
    session_start();

    //Comprobamos si la sesión está iniciada
    if (isset($_SESSION['usuario'])) {
        $user = unserialize($_SESSION['usuario']);
    }
    ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/iconoRestaurante.png" class="logo img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" target="_blank" href="https://www.google.es/maps/place/Fernando+Wirtz+Su%C3%A1rez/@43.3554532,-8.4055386,18.65z/data=!4m5!3m4!1s0xd2e7c9aecfac647:0x603ea84bac75a96d!8m2!3d43.3557146!4d-8.4058278">Localización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carta.php">Carta</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="./img/iconos/login.svg" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                if (isset($_SESSION['usuario'])) {
                                    echo '<a class="dropdown-item" href="pedidos.php">Ver pedidos</a>
											  <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>';
                                } else {
                                    echo '<a class="dropdown-item" href="registro.php">Registrarse</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </li>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrusel2-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel2-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel2-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="contenido" class="container">
        <div>
            <span>Bienvenidos a Restaurante El último bocado en A Coruña.Nuestro restaurante es ese lugar donde tanto se puede venir a tomar un desayuno saludable, como a comer como en casa, tomar unos vinos, merendar o cenar con un ambiente familiar e informal. </span>

            <img src="img/imagen1.jpg">
        </div>

        <div>
            <span>Cocina de calidad y tradicional</span>

            <img src="img/tortilla.jpg">
        </div>

        <div>
            <span>Con diferentes opciones veganas</span>

            <img src="img/vegano.jpg">
        </div>

        <div>
            ¡Vente ya!

            Nuestro Horario:

            Lunes a Viernes de 8:30 a 18:00
            Sábado y Domingo de 10 a 18:00

            (Horarios adaptados a la nueva normativa anti COVID-19)
        </div>

    </div>

    <footer class="footer">
        <div class="footerDireccion">
            <h1>El último bocado</h1>
            <h2>Contacto</h2>
            <div>
                <p>A Coruña, Avenida 143</p>
                <a class="footerEnviarCorreo" href="mailto:a@a.a">Envíanos un correo</a>
            </div>
        </div>
        <ul class="footerNavegacion">
            <li>
                <h2>Novedades</h2>
                <ul>
                    <li>
                        <a href="carta.php">Nueva seccion Vegana</a>
                    </li>
                    <li>
                        <a href="pedidos.php">Nueva zona de pedidos</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Interés</h2>
                <ul>
                    <li>
                        <a aria-current="page" target="_blank" href="https://www.google.es/maps/place/Fernando+Wirtz+Su%C3%A1rez/@43.3554532,-8.4055386,18.65z/data=!4m5!3m4!1s0xd2e7c9aecfac647:0x603ea84bac75a96d!8m2!3d43.3557146!4d-8.4058278">Localización</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="legal">
            <p>2021 Ningún derecho reservado.</p>
        </div>
    </footer>
</body>

</html>