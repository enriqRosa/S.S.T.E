<?php
class Modelo_login extends CI_Model{
    
    function login($mat,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA*/
        $this->db->select('matricula, password, tipo_usuario');
        $this->db->from('coordinador');
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
}
?>