<?php 

class ControladorRegistroPagos{
    
    /*=============================================
    REGISTRO DE PAGOS DE LOS DEUDORES              
    =============================================*/

    static public function ctrRegistrarPago(){

        /* Validar variable $_POST */
        if (isset($_POST['idDeudor'], $_POST['idDeuda'], $_POST['cantidadPagada'])) {
        
            $tabla = "detallespagos";

            $idDeudor = $_POST['idDeudor'];
            $idDeuda = $_POST['idDeuda'];
            $cantidadPagada = $_POST['cantidadPagada'];

            //echo $idDeuda, $idDeudor, $cantidadPagada;

            $respuesta = ModeloRegistroPagos::mdlRegistroPago($tabla, $idDeudor, $idDeuda, $cantidadPagada);

            //var_dump($respuesta);

            echo '<br><br>';
            
            if ($respuesta == "ok") {
                
                echo '¡El usuario se ha guardado correctamente!';
                
            } else{

                echo '¡Error: El usuario no se guardó!';

            }

        
        }


    }

}