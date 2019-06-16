<?php 

require_once "controladores/plantilla.controlador.php";
require_once "controladores/registroUsuarios.controlador.php";
require_once "controladores/registroCobros.controlador.php";
require_once "controladores/registroPagos.controlador.php";
require_once "controladores/consultaDeudas.controlador.php";
//require_once "controladores/consultaTiempo.controlador.php";
//require_once "controladores/reporteUsuario.controlador.php";

require_once "modelos/registroUsuarios.modelo.php";
require_once "modelos/registroCobros.modelo.php";
require_once "modelos/registroPagos.modelo.php";
require_once "modelos/consultaDeudas.modelo.php";
//require_once "modelos/consultaTiempo.modelo.php";
//require_once "modelos/reporteUsuario.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
