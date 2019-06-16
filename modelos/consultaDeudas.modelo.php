<?php 

require_once "conexion.php";

/*=============================================
CONSULTAR DEUDAS DE LOS DEUDORES            =
=============================================*/

class ModeloConsultaDeudas{

    static public function mdlConsultaDeuda($tabla, $fechaI, $fechaF){

        $stmt = Conexion::conectar()->prepare("SELECT * from $tabla WHERE fechaDeuda between $fechaI and $fechaF");

		$stmt -> execute();

        return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;


    }

}




