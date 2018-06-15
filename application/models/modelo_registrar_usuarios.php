<?php 
class Modelo_registrar_usuarios extends CI_Model{

    /*************************************************FUNCIONES PARA EL TUTOR*************************************************************** */
    //FUNCIÓN PARA REGISTRAR A LOS TUTORES -->DEL CONTROLADOR ADMIN
    function registrarTutores($data){
        $count=$this->db->insert('tutor',$data);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
    //FUNCIÓN QUE MUESTRA A LOS TUTORES REGISTRADOS EN LA TABLA
    function mostrardatosTutor(){
        //select * from tutor
        $data=$this->db->get('tutor');
        return $data->result();
    }
    //FUNCIÓN QUE MUESTRA LOS DATOS DEL TUTOR PARA SER EDITADOS MEDIANTE LA 'matricula'
    function traerdatosTutor($matricula){
        $this->db->where('matricula',$matricula);
        $data=$this->db->get('tutor');
        return $data->result();
    }
/*************************************************FUNCIONES PARA EL TUTORADO*************************************************************** */
    //FUNCIÓN PARA REGISTRAR A LOS TUTORADOS -->DEL CONTROLADOR ADMIN
    function registrarTutorado($data){
        $count=$this->db->insert('tutorado',$data);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
    //FUNCIÓN QUE MUESTRA A LOS TUTORES REGISTRADOS EN LA TABLA
    function mostrardatosTutorado(){
        //select * from tutor
        $data=$this->db->get('tutorado');
        return $data->result();       
    }
    function traerdatosTutorado($matricula){
        $this->db->where('matricula',$matricula);
        $data=$this->db->get('tutorado');
        return $data->result();
    }
    //FUNCIÓN PARA EL TUTORADO, NO PARA EL ADMIN 
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
    function registrarCoordinador($data){
        $count=$this->db->insert('coordinador',$data);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
    //FUNCIÓN QUE MUESTRA A LOS TUTORES REGISTRADOS EN LA TABLA
    function mostrardatosCoordinador(){
        $data=$this->db->get('coordinador');
        return $data->result();
    }
    function traerdatosCoordinador($matricula){
        $this->db->where('matricula',$matricula);
        $data=$this->db->get('coordinador');
        return $data->result();
    }
}
?>