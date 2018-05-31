<?php
class usuariosSql
{
    public static function  indentificarUsuario()
    {
        $query="SELECT * FROM coordinador WHERE matricula=? AND password=?";
        return $query;
    }
    public static function validateIfExistsUser()
    {
        $query = "SELECT * FROM usuarios WHERE user=?";
        return $query;
    }
}
?>
