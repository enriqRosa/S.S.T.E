<?php

class conexion {

    private static $host = "localhost";
    private static $port = "3307";
    private static $user = "root";
    private static $pwd = "root";
    private static $bd = "sstebd";

    public static function conectar() {
        return mysqli_connect(conexion::$host, conexion::$post, conexion::$user, conexion::$pwd, conexion::$bd);
    }

}
?>
