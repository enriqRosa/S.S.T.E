<?php 
class Modelo_registrar_usuarios extends CI_Model{

    /*************************************************FUNCIONES PARA EL TUTOR*************************************************************** */
    //FUNCIÓN PARA REGISTRAR A LOS TUTORES -->DEL CONTROLADOR ADMIN
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
        $this->db->select("nombre,ap_paterno,ap_materno"); 
        $this->db->from('administrador');  
        $this->db->where("matricula",$this->session->userdata("matricula"));
        $query=$this->db->get();
    }
/*************************************************FUNCIONES PARA EL TUTORADO*************************************************************** */
    //FUNCIÓN PARA REGISTRAR A LOS TUTORADOS -->DEL CONTROLADOR ADMIN
    function registrarTutorado($mat,$nom,$paterno,$materno,$carrera,$semestre,$prog,$pass,$tipo,$status){
        $data = array(
            'matricula' => $mat,
            'nombre' => $nom,
            'ap_paterno' => $paterno,
            'ap_materno' => $materno,
            'carrera' => $carrera,
            'semestre' => $semestre,
            'programa' => $prog,
            'pass' => $pass,
            'tipo_usuario' => $tipo,
            'status' => $status
        );
        return $this->db->insert('tutorado', $data);
    }
    //FUNCIÓN QUE MUESTRA A LOS TUTORES REGISTRADOS EN LA TABLA
    function mostrardatosTutorado(){
        //select * from tutor
        $query=$this->db->get('tutorado');
        return $query;        
    }
    function actualizarTutorado($correo,$telefono){        
        $data=array(
            'correo' => $correo,
            'telefono' => $telefono
        );
        $this->db->where('matricula', $this->session->userdata("matricula"));
        $this->db->update('tutorado', $data);
    }
    /*************************************************FUNCIONES DEL COORDINADOR*************************************************************** */
    //FUNCIÓN PARA REGISTRAR A LOS TUTORADOS -->DEL CONTROLADOR ADMIN
    function registrarCoordinador($mat,$nom,$paterno,$materno,$correo,$telefono,$pass,$tipo,$status){
        $data = array(
            'matricula' => $mat,
            'nombre' => $nom,
            'ap_paterno' => $paterno,
            'ap_materno' => $materno,
            'correo' => $correo,
            'telefono' => $telefono,
            'pass' =>$pass,
            'tipo_usuario' => $tipo,
            'status' => $status
        );
        return $this->db->insert('coordinador', $data);
    }
    //FUNCIÓN QUE MUESTRA A LOS TUTORES REGISTRADOS EN LA TABLA
    function mostrardatosCoordinador(){
        $query=$this->db->get('coordinador');
        return $query;        
    }
}
?>