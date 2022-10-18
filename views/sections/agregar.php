<?php 
    include_once('./views./nav.php');
    require_once('././controller/verLibros.php');
    require_once('././controller/ctrFormulario.php');

    $ID = (isset($_POST['ID']))?$_POST['ID']:"";
    $titulo = (isset($_POST['titulo']))?$_POST['titulo']:"";
    $archivo = (isset($_POST['archivo']))?$_POST['archivo']:"";
    $imagen = (isset($_POST['imagen']))?$_POST['imagen']:"";
    $descripcion = (isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $ctrFormulario = new ControladorFormulario;

    switch ($accion) {
        case 'agregar':
            $mensaje = $ctrFormulario->ctrAgregar($titulo,$imagen,$descripcion,$archivo);
        break;
        case 'modificar':
            $mensaje = $ctrFormulario->ctrModificar($titulo,$imagen,$descripcion,$archivo,$ID);
        break;
        case 'seleccionar':
            $resultado = $ctrFormulario->ctrSeleccionar($ID);
            $titulo = $resultado['nombre'];
            $archivo = $resultado['archivo'];
            $imagen = $resultado['imagen'];
            $descripcion = $resultado['descripcion'];
        break;
        case 'borrar':
            $ctrFormulario->ctrBorrar($ID);
        break;
        case 'cancelar':
            header("Location: index.php?ruta=agregar");
        break;
    }
?>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Datos del Libro
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class = "form-group d-none">
                            <label for="ID">ID</label>
                            <input required readonly type="text" class="form-control" name="ID" id="ID" placeholder="ID" value="<?php echo $ID?>">
                        </div>
                        <div class = "form-group">
                            <label for="titulo">Titulo:</label>
                            <input required type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $titulo?>">
                            <h3><?php if (isset($mensaje)) {
                                echo "<h6 class='text-danger'>$mensaje</h6>";
                            }?></h3>
                        </div>
                        <div class = "form-group">
                            <label for="imagen">Imagen:</label>
                            <br>
                                <?php if($imagen != "") { ?>
                                    <img class="img-thumnail rounded my-2" src="<?php echo $imagen;?>" width="50">
                                <?php } ?>
                            <input required type="text" class="form-control" name="imagen" id="imagen" placeholder="Url de la imagen" value="<?php echo $imagen?>">
                        </div>
                        <div class = "form-group">
                            <label for="archivo">Archivo:</label>
                            <input required type="text" class="form-control" name="archivo" id="archivo" placeholder="Url del archivo" value="<?php echo $archivo?>">
                        </div>
                        <div class = "form-group">
                            <label class="d-block mb-1" for="descripcion">Descripcion:</label>
                            <textarea name="descripcion" id="descripcion" cols="40" rows="10" placeholder="Ingrece la descripcion"><?php echo $descripcion?></textarea>
                        </div>
                        <div class="btn-group mt-3" role="group" aria-label="">
                            <button type="submit" <?php echo ($accion == "seleccionar")?"disabled":""?> name="accion" value="agregar" class="btn btn-success">Agregar</button>
                            <button type="submit" <?php echo ($accion != "seleccionar")?"disabled":""?> name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                            <button type="submit" <?php echo ($accion != "seleccionar")?"disabled":""?> name="accion" value="cancelar" class="btn btn-info">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ctrLibros = new ControladorLibros;
                    $libros = $ctrLibros->ctrLibros();
                    foreach($libros as $libro) {
                    ?>
                    <tr>
                        <td><?php echo $libro['id']?></td>
                        <td><?php echo $libro['nombre']?></td>
                        <td>
                            <img class="img-thumnail rounded" src="<?php echo $libro['imagen']?>" width="50" alt="<?php echo $libro['imagen']?>">
                        </td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="ID" id="ID" value="<?php echo $libro['id']?>">
                                <input type="submit" name="accion" value="seleccionar" class="btn btn-primary">
                                <input type="submit" name="accion" value="borrar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once('./views./pie.php');?>