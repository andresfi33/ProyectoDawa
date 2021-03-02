<?php

class DB {

    /**
    * Método que registra un nuevo usuario en una base de datos
    * @param $user
    * @param $password
    * @return $result
    */
    public static function registrarUsuario($user, $password, $email)
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
        $insert = "INSERT INTO usuarios (nombreUsuario, email, contrasenha) VALUES ('$user', '$email', '$passwordCifrada')";

        //Resultado del insert
        $result = mysqli_query($conexion, $insert);

        //Cerrar conexión
        if ($conexion) {
            mysqli_close($conexion);
        }

        return $result;
    }

    /**
     * Método que comprueba en la base de datos si un usuario existe
     * @param type $user
     * @param type $password
     * @return boolean
     */
    public static function comprobarUsuario($email, $password) {
        $servidor = "localhost";
        $baseDeDatos = "restaurante";
        $usuario = "root";
        $contrasenha = "";
        $existe = false;
        //Conexión con el servidor
        $conexion = mysqli_connect($servidor, $usuario, $contrasenha) or die("No se ha podido conectar con el servidor");

        //Conexión con la base de datos
        $db = mysqli_select_db($conexion, $baseDeDatos) or die("No se ha podido conectar con la base de datos");

        $consulta = "select contrasenha from usuarios where email = '$email'";

        //Consulta
        $resultado = mysqli_query($conexion, $consulta) or die("Problema en la consulta de los datos");

        $columna = mysqli_fetch_array($resultado);
        //Cerrar conexión
        if ($conexion) {
            mysqli_close($conexion);
        }

        if(null != $columna){
            $passwordCifrada = md5($password);
            if ($columna[0] == $passwordCifrada) {
                $existe = true;
            } else {
                $existe = false;
            }
        }

        return $existe;
        
    }

}

?>