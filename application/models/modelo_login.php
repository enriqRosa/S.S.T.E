<?php
class Modelo_login extends CI_Model{
    //FUNCIÓN PARA LA TABLA 'coordinador'
    function login($mat,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA*/
        $this->db->select('matricula, password, tipo_usuario');
        $this->db->from('coordinador');
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
    //FUNCION PARA CONSULTAR LOS CAMPOS DE LA TABLA 'tutor'
    function login_tutor($mat,$pass){
        $this->db->select('matricula, password, tipo_usuario');
        $this->db->from('tutor');
        $this->db->where('matricula',$mat);
        $this->db->where('password',$pass);
        $this->db->limit(1);

        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    //FUNCIÓN PARA TRAER LOS CAMPOS 'nombre,ap_paterno,ap_materno DE LA TABLA 'coordinador'
    //ADMINISTRADOR
    function getPosts(){       
        $this->db->select("nombre,ap_paterno,ap_materno"); 
        $this->db->from('coordinador');
        $this->db->where("tipo_usuario","AD");        
        $query = $this->db->get();
        return $query->result();
    }
    function getAcademico(){       
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('coordinador');
        $this->db->where("tipo_usuario","CA");        
        $query = $this->db->get();
        return $query->result();
    }
    function getInstitucional(){
        $this->db->select("matricula,nombre,ap_paterno,ap_materno,correo"); 
        $this->db->from('coordinador');
        $this->db->where("tipo_usuario","CI");        
        $query = $this->db->get();
        return $query->result();
    }
}
?>