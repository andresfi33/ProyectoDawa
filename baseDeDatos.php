<?php
function conexionBaseDatos()
{
    $mysqli = new mysqli("localhost", "root", "", "restaurante");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "Entra";
}
/*$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}*/

//Login

//Register

/**
 * Método que registra un nuevo usuario en una base de datos
 * @param $user
 * @param $password
 * @return $result
 */
function registrarUsuario($user, $password)
{
    $servidor = "localhost";
    $baseDeDatos = "restaurante";
    $usuario = "root";
    $contrasenha = "";
    //Conexión con el servidor
    $conexion = mysqli_connect($servidor, $usuario, $contrasenha) or die("No se ha podido conectar con el servidor");

    //Conexión con la base de datos
    $db = mysqli_select_db($conexion, $baseDeDatos) or die("No se ha podido conectar con la base de datos");

    //Insert
    $passwordCifrada = md5($password);
    $insert = "INSERT INTO usuarios (nombreUsuario, contrasenha) VALUES ('$user', '$passwordCifrada')";

    //Resultado del insert
    $result = mysqli_query($conexion, $insert);

    //Cerrar conexión
    if ($conexion) {
        mysqli_close($conexion);
    }

    return $result;
}
