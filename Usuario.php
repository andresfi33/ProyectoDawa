<?php

class Usuario {

    private $nombre;
    private $contrasenha;

    function __construct($name, $pass) {
        $this->nombre = $name;
        /* Guardar contraseña sin cifrar */
        $this->contrasenha = $pass;
    }
    
    function __destruct() {
    }


    /* Devolver el nombre */

    public function getNombre() {
        return $this->nombre;
    }

    /* Cambiar el nombre */

    public function setNombre($name) {
        $this->nombre = $name;
    }
    
    /* Devolver la contraseña */

    public function getContrasenha() {
        return $this->contrasenha;
    }

    /* Cambiar la contraseña */

    public function setContrasenha($pass) {
        $this->contrasenha = $pass;
    }

}