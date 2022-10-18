<?php
require_once './model/./libros.model.php';

class ControladorLibros extends ModeloLibros{

    public function ctrLibros() {
        $libros = $this->getLibros();
        return $libros;
    }

    public function ctrBusqueda() {
            $busqueda = $_POST['busqueda'];
            $libros = $this->getSearch($busqueda);
            return $libros;
    }

    public function ctrInfo() {
        if(isset($_GET['ruta']) == "infoLibro") {
            $id = $_GET['id'];
            $libro = $this->getInfo($id);
            return $libro;
        }
    }
}

?>