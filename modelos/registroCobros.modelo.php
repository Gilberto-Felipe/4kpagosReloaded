<?php 

require_once "conexion.php";

class ModeloRegistroCobros{

    /*=============================================
	REGISTRAR DEUDAS DE LOS CLIENTES
    =============================================*/
    
    static public function mdlInsertarCobro($tabla, $id, $concepto, $monto, $estado){

		// echo $tabla, $id, $concepto, $monto, $estado;

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_usuario, concepto, monto, fechaDeuda, estado) VALUES(:id_usuario, :concepto, :monto, NOW(), :estado)");

		$stmt -> bindParam(":id_usuario", $id, PDO::PARAM_INT);
		$stmt -> bindParam(":concepto", $concepto, PDO::PARAM_STR);
		$stmt -> bindParam(":monto", $monto, PDO::PARAM_INT);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_INT);

		if ($stmt->execute()){
			
			return "ok";

		}
		else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;


       	/*
		try {

			$conn = Conexion::conectar();

			$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO $tabla (id_usuario, concepto, monto, fechaDeuda, estado) VALUES($id, $concepto, $monto, NOW(), $estado)";

			$conn -> exec($sql);

			echo "New record created successfully";			

		} catch(PDOException $e){

			echo $sql . "<br>" . $e->getMessage();

		}
		
		$conn = null;
		
		*/



    }




    
}
