<?php 

require_once "conexion.php";


class ModeloUsuarios{
	
	/*=============================================
	=            LOGIN USUARIOS            =
	=============================================*/

	static public function mdlLoginUsuario($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * from $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
		
	}

	/*=============================================
	=            CREACIÓN DE USUARIOS            =
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, telefono, email, password, id_perfil) VALUES(:nombre, :telefono, :email, :password, :id_perfil)");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_perfil", $datos["id_perfil"], PDO::PARAM_INT);
		
		//$stmt-> debugDumpParams();

		if ($stmt->execute()){
			
			return "ok";

		}
		else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;

	}

	
}






