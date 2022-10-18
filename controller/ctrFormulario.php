<?php
require_once './model/./formulario.model.php';

class ControladorFormulario extends ModeloFormulario {
    
    public function ctrAgregar($titulo,$imagen,$descripcion,$archivo) {
        return $this->agregarLibros($titulo,$imagen,$descripcion,$archivo);
    }

    public function ctrModificar($titulo,$imagen,$descripcion,$archivo,$id) {
        return $this->modificarLibros($titulo,$imagen,$descripcion,$archivo,$id);
    }

    public function ctrSeleccionar($id) {
        return $this->seleccionarLibros($id);
    }

    public function ctrBorrar($id) {
        return $this->borrarLibros($id);
    }
}

?>