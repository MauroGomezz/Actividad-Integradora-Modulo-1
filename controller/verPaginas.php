<?php
require('././model/db.php');

if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "libros" || $_GET["ruta"] == "acercaDe" || $_GET["ruta"] == "infoLibro") {
        include "views/sections/" . $_GET["ruta"] . ".php";
    } else {
        include "views/sections/error404.php";
    }
} else {
    include "views/sections/inicio.php";
}

?>