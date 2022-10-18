<?php 
require('./views./nav.php');
require('././controller/ctrLogin.php');

$ingreso = new ControladorLogin();
$mensaje = $ingreso -> ctrIngreso();
?>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <br>
        <form method="post">
            <div class="card">
                <div class="card-body p-5">
                <div>
                    <h2>Iniciar sesion</h2>
                </div>
                <br>
                <div class="mb-3">
                    <input type="email"
                    class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password"
                    class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-success w-100" name="login">Iniciar sesion</button>
                <?php
                    if (isset($mensaje)) {
                        echo $mensaje;
                    }
                ?>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php require('./views./pie.php');?>
