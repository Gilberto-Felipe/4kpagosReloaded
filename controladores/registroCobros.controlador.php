<?php 

class ControladorRegistroCobros{ 

    /*=============================================
	REGISTRAR DEUDAS DE LOS CLIENTES
	=============================================*/

	static public function ctrInsertarCobro(){

        /* Validar variable $_POST */

		if (isset($_POST['idUsuario'])) {
            
            $tabla = "deuda";

			$id = $_POST['idUsuario'];
            $concepto = $_POST['concepto'];
            $monto = $_POST['monto'];
            $estado = 0;

            
            //echo $tabla, $id, $concepto, $monto, $fecha, $estado;
            
            $respuesta = ModeloRegistroCobros::mdlInsertarCobro($tabla, $id, $concepto, $monto, $estado);
            
            // var_dump($respuesta);

            echo '<br><br>';
            
            if ($respuesta == "ok") {
                
                echo '¡El usuario se ha guardado correctamente!';
                
            } else{

                echo '¡Error: El usuario no se guardó!';

            }

        } 

    }

}
