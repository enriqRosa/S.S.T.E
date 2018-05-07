<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/vista/vistashtml/form.php";

class moduloimgbo{
private $vista;//declaración de variable
        function __construct(){//realizamos el inicio de la variable
	        $this->vista= new vistabtn();//una case del archivo html        
        }
        function funcionboton ($r){//funcion de la clase 'imgcontrol' del archivo bo
	        return $this->vista->funcionVistaBtn($r); //cualquier nombre a la vista-- se crea una nueva funcion para el archivo 
        } 
}
?>