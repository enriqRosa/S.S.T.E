<?php 
class Modelo_registrar_usuarios extends CI_Model{

    //FUNCIÓN PARA REGISTRAR A LOS TUTOTES -->DEL CONTROLADOR ADMIN
    function registrarTutores($mat,$nom,$paterno,$materno,$correo,$telefono,$pass,$status,$tipo){
        $data = array(
            'matricula' => $mat,
            'nombre' => $nom,
            'ap_paterno' => $paterno,
            'ap_materno' => $materno,
            'correo' => $correo,
            'telefono' => $telefono,
            'pass' => $pass,
            'status' => $status,
            'tipo_usuario' => $tipo
        );
        return $this->db->insert('tutor', $data);
    }
    //FUNCIÓN QUE MUESTRA A LOS TUTORES REGISTRADOS EN LA TABLA
    function mostrardatosTutor(){
        //select * from tutor
        $query=$this->db->get('tutor');
        return $query;        
    }
    //FUNCIÓN QUE MUESTRA LOS DATOS DEL TUTOR PARA SER EDITADOS
    function traerdatosTutor(){

    }
}
?>