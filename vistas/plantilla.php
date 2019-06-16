<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>Mi primer Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="vistas/css/index.css" th:href="@{/css/index.css}">

</head>

<body>

  <?php

  /*=============================================
                  LISTA BLANCA
                        O
                  RUTAS AMIGABLES                  
  =============================================*/ 

  if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok') {

    echo '<div class="wrapper">';

    /*=============================================
    =                  CABEZOTE                  =
    =============================================*/  

    include "modulos/cabezote.php";
    
    /*=============================================
    =                  MENU                     =
    =============================================*/ 

    include "modulos/menu.php";
  
    /*=============================================
    =                CONTENIDO                   =
    =============================================*/
    
    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "root" ||
        $_GET["ruta"] == "registroUsuarios" ||      
        $_GET["ruta"] == "registroCobros" ||
        $_GET["ruta"] == "registroPagos" ||
        $_GET["ruta"] == "ConsultaDeudas" ||
        $_GET["ruta"] == "consultaTiempo" ||
        $_GET["ruta"] == "ReporteUsuario" ||
        $_GET["ruta"] == "salir")  {

        include "modulos/".$_GET["ruta"].".php";

      } else{

        include "modulos/404.php";

      }

    } else{

        include "modulos/menu.php";

    } 

/*=============================================
=                FOOTER                   =
=============================================*/ 
  include "modulos/footer.php";

    echo '</div>';

  } else {

    include "modulos/login.php";

  }

  ?>

</body>
</html>