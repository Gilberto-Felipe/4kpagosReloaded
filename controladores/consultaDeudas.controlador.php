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

            //echo $fechaI, $fechaF;
            
            $respuesta = ModeloConsultaDeudas::mdlConsultaDeuda($tabla, $fechaI, $fechaF);

            // var_dump($respuesta);

            return $respuesta;         
            
        }

    }


}










