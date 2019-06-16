<?php 

class ControladorConsultarDeudas{
    
    /*=============================================
	CONSULTAR DEUDAS              
    =============================================*/

    static public function ctrConsultarDeuda() {      
               
        /* Validar variable $_POST */
        if (isset($_POST["fechaI"], $_POST["fechaF"])) {
            
            $tabla = "deuda";

            $fechaI = $_POST["fechaI"];
            $fechaF = $_POST["fechaF"];

            echo $fechaI, $fechaF;
            
            //$respuesta = ModeloRegistroCobros::mdlInsertarCobro($tabla, $id, $concepto, $monto, $estado);
            
            // var_dump($respuesta);

            // echo '<br><br>';
            
            // if ($respuesta == "ok") {
                
            //     echo '¡El usuario se ha guardado correctamente!';
                
            // } else{

            //     echo '¡Error: El usuario no se guardó!';

            // }

        }

    }

}










