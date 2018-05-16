<?php
class usuariosSql
{
    public static function  indentificarUsuario()
    {
        $query="SELECT * FROM usuarios WHERE user=? AND password=?";
        return $query;
    }
    public static function validateIfExistsUser()
    {
        $query = "SELECT * FROM usuarios WHERE user=?";
        return $query;
    }
}
?>
