<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/formulariobo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/formulariobjetos.php";

$bo=new moduloimgbo();//instancia de cla clase bo

switch ($_REQUEST['action']) {
case "mostrarboton": //es el action del archivo 'imagen.js'
$mensaje=new objetobtn();//instancia de la clase objeto 
$r=$bo->funcionboton($mensaje); //se manda a una fucion-- funcion del archivo bo
print $r; //se muestra el resultado 
break;	
}
?>