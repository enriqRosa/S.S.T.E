<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/modelo/objetos/usuarioObj.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/modelo/bo/usuarioBo.php';

switch ($_POST['action']) {
    case "login":
        $usuario=new usuario();
        $usuario->matricula=$_POST['matricula'];
        $usuario->password=$_POST['password'];
        $bo=new usuarioBo();
        print_r(json_encode($bo->identificarUsuarioBo($usuario)));
        break;

    default:
        break;
}

?>