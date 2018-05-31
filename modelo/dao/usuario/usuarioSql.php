<?php
class usuarioSql
{
    public static function  indentificarUsuario()
    {
        
        $query="select * from coordinador where matricula=? and password=?";
        return $query;
    }
    public static function validateIfExistsUser()
    {
        $query = "SELECT * FROM usuarios WHERE user=?";
        return $query;
    }
}
?>
