<?php require('cabeza.php');
$url="http://".$_SERVER['HTTP_HOST'].'/Proyectos/sitio'
?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
  <div class="container-fluid">
    <img class="" src="././assets/IMG/biblioteca-logo.png" alt="Biblioteca logo" style="max-width:inherit; max-height:50px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php?ruta=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ruta=libros">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ruta=acercaDe">Acerca de</a>
        </li>
      </ul>
