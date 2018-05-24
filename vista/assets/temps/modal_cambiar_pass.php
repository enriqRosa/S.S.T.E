<?php

class vista_password{
function funcion_vista_password($datos){
    $cad='
    <form id = "formularioAlumnos" name ="formularioAlumnos">
        NOMBRE: <input type="text" name="nombre"><br>
        APELLIDO PATERNO: <input type="text" name="ap_paterno"><br>
        APELLIDO MATERNO: <input type="text" name="am_materno"><br>
        <input type="submit" name="" value="Registrar" onclick="alumnos()">
    </form>




        ';
	return $cad;
}
}
?>