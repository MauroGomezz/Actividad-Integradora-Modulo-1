<?php 
require('./views/nav.php');
require('././controller/verLibros.php');
?>
            <form class="d-flex" role="search" method="POST">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busqueda">
                <input class="btn btn-outline-success" type="submit" name="enviar" value="Buscar"></input>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 mh-100">
<?php foreach($libros as $libro) { ?>
        <div class="col-md-3">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo $libro['imagen']?>" style="max-width:inherit; height:380px;">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $libro['nombre']?></h4>
                    <form action="" method="GET">
                        <a target="_blank" class="btn btn-success" href="<?php echo $libro['archivo']?>">Descargar</a>
                        <a href="index.php?ruta=infoLibro&id=<?php echo $libro['id']?>" class="btn btn-warning">Mas Info</a>
                    </form>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</div>
<?php require('./views./pie.php');?>