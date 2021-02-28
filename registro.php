<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/iconoRestaurante.png">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>

<body>
    <?php
    include 'baseDeDatos.php';

    if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['email'])) {
        //Usuario
        $user = $_POST["user"];
        //Contraseña
        $password = $_POST["password"];

        //Registrar usuario
        registrarUsuario($user, $password);
    }
    ?>

    <form method="post">
        <div class="form-structor">
            <div class="signup">
                <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
                <div class="form-holder">
                    <input type="text" name="user" class="input" placeholder="Nombre" />
                    <input type="email" name="email" class="input" placeholder="Email" />
                    <input type="password" name="password" class="input" placeholder="Contraseña" />
                </div>
                <button class="submit-btn">Sign up</button>
                <input type="submit" name="" value="Buscar" id="boton1">
            </div>
            <div class="login slide-up">
                <div class="center">
                    <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                    <div class="form-holder">
                        <input type="email" name="email2" class="input" placeholder="Email" />
                        <input type="password" name="email2" class="input" placeholder="Contraseña" />
                    </div>
                    <button class="submit-btn">Log in</button>
                </div>
            </div>
        </div>
    </form>

    <script src="./javascript/registro.js"></script>
</body>

</html>