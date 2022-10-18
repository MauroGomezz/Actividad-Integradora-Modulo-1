<?php

if (isset($_GET["ruta"])) {
    if (
        $_GET["ruta"] == "inicio" || 
        $_GET["ruta"] == "libros" || 
        $_GET["ruta"] == "acercaDe" || 
        $_GET["ruta"] == "infoLibro" ||
        $_GET["ruta"] == "login" || 
        $_GET["ruta"] == "salir" || 
        $_GET["ruta"] == "sinAcceso" || 
        $_GET["ruta"] == "agregar"
        ) {
        include "views/sections/" . $_GET["ruta"] . ".php";
    } else {
        include "views/sections/error404.php";
    }
} else {
    include "views/sections/inicio.php";
}

?>