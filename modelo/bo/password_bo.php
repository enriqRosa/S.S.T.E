<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/vista/assets/temps/modal_cambiar_pass.php";


class modal_password{
private $vista;//declaración de variable
        function __construct(){//realizamos el inicio de la variable
	        $this->vista= new vista_password();//una funcion para archivo vistashtml
        }
        function funcion_password($r){//funcion de la clase del archivo bo
	        return $this->vista->funcion_vista_password($r); //cualquier nombre a la vista-- se crea una nueva funcion para el archivo 
        } 
}
?>