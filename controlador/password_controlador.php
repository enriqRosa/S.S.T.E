<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/password_bo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/password_obj.php";

$bo=new modal_password();//instancia de cla clase bo

switch ($_REQUEST['action']) {
case "cambiar_password": //es el action del archivo js'
$mensaje=new objeto_password();//instancia de la clase objeto 
$r=$bo->funcion_password($mensaje); //se manda a una fucion-- funcion del archivo bo
print $r; //se muestra el resultado 
break;	
}
?>