<?php
class Modelo_login extends CI_Model{
   
    function login($mat,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA 'usuarios'*/
        $this->db->select('matricula, pass, tipo_usuario');
        $this->db->from('usuarios');
        $this->db->where('matricula',$mat);
        $this->db->where('pass',$pass);
        $this->db->limit(1);
//SI ES FALSO QUE BUSCAR EM OTRA TABLA
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    //FUNCIÓN PARA TRAER LOS CAMPOS 'nombre,ap_paterno,ap_materno DE LA TABLA 'administrador'
    //ADMINISTRADOR
    function getAdmin(){  
        $this->db->select("nombre,ap_paterno,ap_materno"); 
        $this->db->from('administrador');  
        $this->db->where("matricula",$this->session->userdata("matricula"));
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    //COORDINADOR ACADEMICO
    function getAcademico(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('coordinador'); 
        $this->db->where("matricula",$this->session->userdata("matricula"));      
        $query = $this->db->get();
        return $query->result();
    }
    //COORDINADOR INSTITUCIONAL
    function getInstitucional(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('coordinador');  
        $this->db->where("matricula",$this->session->userdata("matricula"));     
        $query = $this->db->get();
        return $query->result();
    }
    //COORDINADOR TUTOR
    function getTutor(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('tutor');  
        $this->db->where("matricula",$this->session->userdata("matricula"));     
        $query = $this->db->get();
        return $query->result();
    }
    //COORDINADOR TUTORADO
    function getTutorado(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('tutorado');  
        $this->db->where("matricula",$this->session->userdata("matricula"));     
        $query = $this->db->get();
        return $query->result();
    }
}
?>