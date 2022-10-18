<?php
require_once "./model/./db.php";

class ModeloLogin extends Conexion{

		public function mdlSeleccionarRegistros($tabla, $item, $valor) {

			$stmt = $this->con->query("SELECT * FROM $tabla WHERE $item = '$valor'");
			
			if(mysqli_num_rows($stmt) > 0) {
				return $stmt->fetch_assoc();
			}
		}
	}
?>