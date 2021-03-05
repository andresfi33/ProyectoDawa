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
    include 'Usuario.php';
    //Utilizar las sesiones.
    session_start();

    //Coger datos del formulario
    if(isset( $_POST['registro'])){
        if (isset($_POST["user"]) && isset($_POST["password"]) && isset($_POST["email"])) {
            //Usuario
            $user = $_POST["user"];
            //Contraseña
            $password = $_POST["password"];
            //Email
            $email = $_POST["email"];
            
            //Si no coinciden las contraseñas.
            if (strlen($password) < 6) {
                print("<p id='info'>La contraseña es demasiado corta.</p>");
                //Si el usuario no es suficientemente largo.
            } else if (strlen($user) < 1) {
                print("<p id='info'>El nombre es demasiado corto.</p>");
                //Si la captcha es errónea.
            } else{
                //Cifrar la contraseña y guardarla
                if(DB::comprobarUsuario($email, $password)){
                    print("<p id='info'>El correo ya existe</p>");
                } else{
                    if (DB::registrarUsuario($user, $password, $email)) {
                        //Guardamos el usuario y la contraseña en la sesión actual.
                         $_SESSION['usuario'] = $email;
                         $_SESSION['pass'] = $password;
       
                       //Creamos objeto para guardar usuario y contraseña (sin cifrar).
                       $_SESSION['usuario'] = serialize(new Usuario($user, $password));
                       //Al registrarse el usuario se redirecciona a la página principal.
                       header('Refresh: 2; URL=index.php');
                   }
                }
    
            }
        }
    } else{
        if (isset($_POST["password2"]) && isset($_POST["email2"])) {
            //Contraseña
            $password = $_POST["password2"];
            //Email
            $email = $_POST["email2"];
            
            //Cifrar la contraseña y guardarla
            if(DB::comprobarUsuario($email, $password)){
                    //Guardamos el usuario y la contraseña en la sesión actual.
                    $_SESSION['usuario'] = $email;
                    $_SESSION['pass'] = $password;
    
                    //Creamos objeto para guardar usuario y contraseña (sin cifrar).
                    $_SESSION['usuario'] = serialize(new Usuario($email, $password));
                    //Al registrarse el usuario se redirecciona a la página principal.
                    header('Refresh: 2; URL=index.php');
            }else{
                print('Usuario o contraseña incorrectos');
            }
        }
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
                <input class="submit-btn" name="registro" value="Registrarse" type="submit" onclick="<?php $accion='R' ?>">
            </div>
            <div class="login slide-up">
                <div class="center">
                    <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                    <div class="form-holder">
                        <input type="email" name="email2" class="input" placeholder="Email" />
                        <input type="password" name="password2" class="input" placeholder="Contraseña" />
                    </div>
                    <input class="submit-btn" name="submit" value="Iniciar Sesión" type="submit">
                </div>
            </div>
        </div>
    </form>

    <script src="./javascript/registro.js"></script>
</body>

</html>