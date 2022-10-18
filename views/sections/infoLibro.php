<?php 
require('./views/nav.php');
require('././controller/verLibros.php');
$ctrLibros = new ControladorLibros;
$libro = $ctrLibros->ctrInfo();
?>
</div>
  </div>
</nav>

<div class="container">
<?php foreach($libro as $info) { ?>
    <div class="card mb-3" style="max-width: inherit;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $info['imagen']?>" class="img-fluid rounded-start" alt="libro imagen" style="width:100%;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title"><?php echo $info['nombre']?></h1>
                    <p class="card-text h4"><?php echo $info['descripcion']?></p>
                    <a target="_blank" class="btn btn-success" href="<?php echo $info['archivo']?>">Descargar</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<?php require('./views./pie.php');?>
