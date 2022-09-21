<?php
$con = new Conexion();
$libro = [];

if(isset($_POST['enviar'])) {
    $busqueda = $_POST['busqueda'];
    $libros = $con->getSearch($busqueda);
} elseif(isset($_GET['info'])) {
    $id = $_GET['id'];
    $libro = $con->getInfo($id);
    header("Location: infoLibro.php?id=$id");
} else {
    $libros = $con->getLibros();
}

?>