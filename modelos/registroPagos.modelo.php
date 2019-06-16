<?php 

require_once "conexion.php";

class ModeloRegistroPagos {
    
    /*=============================================
    REGISTRAR PAGOS DE LOS CLIENTES
    =============================================*/

    static public function mdlRegistroPago($tabla, $idDeudor, $idDeuda, $cantidadPagada){

        echo $tabla, $idDeudor, $idDeuda, $cantidadPagada;

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_usuario, id_deuda, cantidadPagada, fechaPago) VALUES(:id_usuario, :id_deuda, :cantidadPagada, NOW())");

        $stmt -> bindParam(":id_deuda", $idDeudor, PDO::PARAM_STR);
        $stmt -> bindParam(":id_usuario", $idDeuda, PDO::PARAM_STR);
        $stmt -> bindParam(":cantidadPagada", $cantidadPagada, PDO::PARAM_STR);

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



