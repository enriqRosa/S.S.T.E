<?php

class conexion {

    private static $host = "localhost";
    private static $port = "";
    private static $user = "root";
    private static $pwd = "";
    private static $bd = "sstebd";

    public static function conectar() {
        return mysqli_connect(conexion::$host, conexion::$port, conexion::$user, conexion::$pwd, conexion::$bd);
    }

}
?>
