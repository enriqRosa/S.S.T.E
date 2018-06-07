<?php
class Modelo_login extends CI_Model{
    //FUNCIÓN PARA LA TABLA 'coordinador'
    function login($mat,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA*/
        $this->db->select('matricula, password, tipo_usuario');
        $this->db->from('usuarios');
        $this->db->where('matricula',$mat);
        $this->db->where('password',$pass);
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
        $query = $this->db->get();
        return $query->result();
    }
    //COORDINADOR ACADEMICO
    function getAcademico(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('c_academico');       
        $query = $this->db->get();
        return $query->result();
    }
    //COORDINADOR INSTITUCIONAL
    function getInstitucional(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('c_institucional');       
        $query = $this->db->get();
        return $query->result();
    }
    function getTutor(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('tutor');       
        $query = $this->db->get();
        return $query->result();
    }
}
?>