<?php 

class ControladorUsuarios{ 

    /*=============================================
	LOGIN USUARIOS              
    =============================================*/

    static public function ctrLoginUsuario() {

        if (isset($_POST["loginTelefono"])) {
            
            if (preg_match('/^[0-9]+$/', $_POST["loginTelefono"]) &&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPassword"])) {

                $tabla = "usuarios";

                $item = "telefono";

                $valor = $_POST["loginTelefono"];

                $respuesta = ModeloUsuarios::mdlLoginUsuario($tabla, $item, $valor);
                
                //var_dump($respuesta);

                if ($respuesta["telefono"] == $_POST["loginTelefono"] && $respuesta["password"] == $_POST["loginPassword"]){
                        
                    $_SESSION['iniciarSesion'] = "ok";
                    $_SESSION['id'] = $respuesta['id'];
                    $_SESSION['nombre'] = $respuesta['nombre'];
                    $_SESSION['id_perfil'] = $respuesta['id_perfil'];  
                    
                    echo '<script>

                            window.location = "menu";
                    
                        </script>';
                                        
                }     

            }

        }

    }

    /*=============================================
	CREACIÓN DE USUARIOS
	=============================================*/

	static public function ctrCrearUsuario(){

		if (isset($_POST['regTelefono'])) {
			
			$_POST['regNombre'];
			$_POST['regTelefono'];
			$_POST['regEmail'];
            $_POST['regPassword'];
            $_POST['regPerfil'];

            $tabla = "usuarios";

            $datos = array(
                "nombre" => $_POST['regNombre'],
                "telefono" => $_POST['regTelefono'],
                "email" => $_POST['regEmail'],
                "password" => $_POST['regPassword'],
                "id_perfil" => $_POST['regPerfil']
            );
            
            
            $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
            
            //var_dump($respuesta);

            echo '<br><br>';
            
            if ($respuesta == "ok") {
                
                echo '¡El usuario se ha guardado correctamente!';
                
            } else{

                echo '¡Error: El usuario no se guardó!';

            }


        } else {

            //echo "Error!!";

        }

    }

}
