<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/S.S.T.E"/ruta.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/modelo/dao/conexion_mdb.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/modelo/dao/objetos/usuarioObjeto.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/modelo/dao/procesaParametros.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/modelo/dao/usuario/usuarioSql.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/modelo/dao/objetos/mensaje.php';
// require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/vista/logicavista/notificationView.php';

class usuarioDao {

    private $con;

    function __construct() {
        $this->con=  conexion_mdb::conectar();
    }
    function __destruct() {
        $this->con->close();
    }

    /*function logoutDao() {
        session_start(); 
        session_destroy(); 
        print "<script>window.location='../index.php';</script>";  
    }

    function sessionValidateDao() {
        session_start(); 
        if (!isset($_SESSION['tipo'])) {
            print "<script>window.location='../index.php';</script>";  
        } 
    }

    function sessionUserTypeDao($type) {
        if ($_SESSION['tipo'] != $type) {
            print "<script>window.location='main.php';</script>";  
        } 
    }*/

    function  identificarUsuarioDao($matricula, $password) 
    {

        $datosArray=array($matricula,$password);

        if( $matricula == '' || $matricula === NULL || is_null($usuario) || $password == '' || $password === NULL || is_null($password) )
        {
          
            $result = Notification::requiredFields();

        } 
        else
        {

            $st = procesa_parametros::PrepareStatement(usuarioSql::indentificarUsuario(),$datosArray);
            $query=$this->con->query($st);

            if($query->num_rows==0)
            {
                $mensaje->mensaje="El usuario no es correcto ";
                $mensaje->tipo="error";
                return $mensaje;
                //$result = Notification::incorrectCredentials();

            } 
            $mensaje->mensaje="Usuario identicado";
            $mensaje->tipo="correcto";
            $usuario=new $usuario();
            $mensaje->otrosDatos=$usuario;
            return $mensaje;//
            /*else 
            {

                $row = mysqli_fetch_array($query); 

                if ($row['status'] != 0) 
                {

                    session_start();
                    //$_SESSION['idusuario']   = $row['idusuario']; 
                    $_SESSION['nombre']      = $row['apaterno'].' '.$row['amaterno'].' '.$row['nombre']; 
                   // $_SESSION['tipo']        = $row['tipo'];               
                   // $result = "<script>window.location='main.php';</script>"; 

                } 
                else 
                { 

                    $result = Notification::disableUser();                

                }
            } */           
        }  

       // return $result;     
    }


   
}
?>
