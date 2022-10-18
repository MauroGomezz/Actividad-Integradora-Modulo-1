<?php
require_once "./model/./db.php";

class ModeloFormulario extends Conexion {

    public function agregarLibros($titulo, $imagen, $descripcion, $archivo) {
        
        $query = $this->con->query("SELECT * FROM libros WHERE nombre = '$titulo'");

        if(mysqli_num_rows($query) > 0) {
            $mensaje = "Ya existe un libro con ese titulo";
            return $mensaje;
        } else {
            $query = "INSERT INTO libros (nombre,imagen,descripcion,archivo) VALUES ('$titulo','$imagen','$descripcion', '$archivo')";
            mysqli_query($this->con, $query);
            header("Location: index.php?ruta=agregar");
        }
    }

    public function modificarLibros($titulo, $imagen, $descripcion, $id, $archivo) {
        
        $query = $this->con->query("SELECT * FROM libros WHERE nombre = '$titulo' and id != '$id'");

        if(mysqli_num_rows($query) > 0) {
            $mensaje = "Ya existe un libro con ese titulo";
            return $mensaje;
        } else {
            $query = "UPDATE libros SET nombre = '$titulo', imagen = '$imagen', descripcion = '$descripcion', archivo = '$archivo' WHERE id = '$id'";
            mysqli_query($this->con, $query);
            header("Location: index.php?ruta=agregar");
        }
    }

    public function seleccionarLibros($id) {
        
        $query = $this->con->query("SELECT * FROM libros WHERE id = '$id'");
        $filas = mysqli_fetch_assoc($query);
        return $filas;
    }

    public function borrarLibros($id) {

        $this->con->query("DELETE FROM libros WHERE id = '$id'");
    }
}

?>