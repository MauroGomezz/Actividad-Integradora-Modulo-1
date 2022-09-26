<?php

class Conexion {

    private $con;

    public function __construct() {
        $this->con = new mysqli('b4oawkqgde9flgj8wzlq-mysql.services.clever-cloud.com','uf2k2gn6ounhbz6o','YKxc0rJpigNMBtLHLFRQ','b4oawkqgde9flgj8wzlq');
    }

    public function getLibros() {
        $query = $this->con->query('SELECT * FROM libros');
        $retorno = [];

        for ($i=0; $fila = $query->fetch_assoc(); $i++) { 
            $retorno[$i] = $fila;
        }

        return $retorno;
    }

    public function getSearch($busqueda) {
        $query = $this->con->query("SELECT * FROM libros WHERE nombre LIKE '%$busqueda%'");
        $retorno = [];

        for ($i=0; $fila = $query->fetch_assoc(); $i++) { 
            $retorno[$i] = $fila;
        }

        return $retorno;
    }
    
    public function getInfo($id) {
        $query = $this->con->query("SELECT * FROM libros WHERE id=$id");
        $retorno = [];

        for ($i=0; $fila = $query->fetch_assoc(); $i++) { 
            $retorno[$i] = $fila;
        }

        return $retorno;
    }
};

$url="http://".$_SERVER['HTTP_HOST'].'/Proyectos/sitio';

?>
