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
    function updateTutor($data,$mat){
        $this->db->where('matricula',$mat);
        $this->db->update('tutor', $data);
        return true;
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
        $data->$this->db->get('tutores');
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
    function updateTutorado($data,$mat){
        $this->db->where('matricula',$mat);
        $this->db->update('tutorado', $data);
        return true;
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
    function updateCoord($data,$mat){
        $this->db->where('matricula',$mat);
        $this->db->update('coordinador', $data);
        return true;
    }
    //INSERTAR EL TUTOR EN LA TABLA 'tutorado'
    function FKtutor($mat,$data){
        $this->db->where('matricula',$mat);
        $this->db->update('tutorado',$data);
        return true;
    }
    function tutoresActivos(){
        $this->db->where('status','ACTIVO');
        $data=$this->db->get('tutor');
        return $data->result();
    }
    function selectnombreTutor($matricula){
        $this->db->select('*');
        $this->db->from('tutor_tutorado');
        $this->db->where('matriculaTutorado',$matricula);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }
    function cambiarasignaciontutor($mat,$data){
        $this->db->where('matricula',$mat);
        $this->db->update('tutorado',$data);
        return true;
    }
    //FUNCIONES PARA EL REGISTRO DEL FORMATO
    function traersalon(){
        $data=$this->db->get('lugar');
        return $data->result();
    }
    function traerArea(){
        $data=$this->db->get('area');
        return $data->result();
    }
    function insertarFormato($data){
        $count=$this->db->insert('formato_individual',$data);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
}

?>  