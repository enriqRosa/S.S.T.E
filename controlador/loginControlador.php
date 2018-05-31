<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/modelo/objetos/usuarioObjeto.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/modelo/bo/usuarioBo.php';

//$bo=new Modulologin();

switch ($_POST['action']) {
    case "login":
        $usuario=new usuario();//instancia de la clase objeto
        $usuario->matricula=$_POST['matricula'];
        $usuario->password=$_POST['password'];
        $bo=new usuarioBo();
        print_r(json_encode($bo->identificarUsuarioBo($usuario)));
        break;

    default:
        break;
}

?>