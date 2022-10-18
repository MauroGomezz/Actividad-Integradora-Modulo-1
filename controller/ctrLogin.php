<?php
require_once './model/./login.model.php';

class ControladorLogin extends ModeloLogin{

    public function ctrIngreso(){   
        
        if (isset($_POST["login"])) {
                $tabla = "usuarios";
                $item = "mail";
                $valor = $_POST["email"];
    
                $respuesta = ModeloLogin::mdlSeleccionarRegistros($tabla, $item, $valor);
    
                if (isset($respuesta["mail"]) == $_POST["email"] && isset($respuesta["contrasenia"]) == $_POST["password"]) {

                    $_SESSION["validarIngreso"] = "ok";
                    
                    header("Location: index.php?ruta=inicio");
                } else {
                    return $mensaje = '<div class="alert alert-danger mt-4 mb-0">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
                }
            }
        }
    }
?>