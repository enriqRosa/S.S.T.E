<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_institucional extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->view('temps/menu_cinstitucional');        

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');
    }
    function index(){
        $this->data['posts']=$this->Modelo_login->getCoordinador();
        $this->load->view('interfaces/interfaz_cinstitucional',$this->data);
    }
    function verificacionSeguimiento(){
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
        $this->load->view('interfaces/verificacion_seguimiento',$this->data);
    }
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL ADMINISTRADOR PARA LA TABLA 'usuarios'
    function cambiarPassword(){
        $this->form_validation->set_rules('actual_pswd','Ingresa tu contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Ingresa nueva contraseña','required|max_length[20]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Confirmar contraseña','required|matches[new_pswd]');
        
        if($this->form_validation->run()==FALSE){
            $this->data['posts']=$this->Modelo_login->getCoordinador();
            $this->load->view('interfaces/interfaz_cinstitucional',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("matricula",$this->session->userdata("matricula"))->get();
            foreach ($sql->result() as $my_pswd) {
                md5($db_password=$my_pswd->pass);
                $db_matricula=$my_pswd->matricula;
                $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                $fixed_pw=md5($this->input->post("new_pswd"));
                $update=$this->db->query("UPDATE coordinador SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                $this->data['posts']=$this->Modelo_login->getCoordinador();
                $this->load->view('interfaces/interfaz_cinstitucional',$this->data);
            }
        }        
    }
}
?>