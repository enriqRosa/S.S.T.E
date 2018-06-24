<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Tutor extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->view('temps/menu_tutor');
        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');
    }
    function index(){
        $this->data['posts']=$this->Modelo_login->getTutor();
        $this->load->view('interfaces/interfaz_tutor',$this->data);
    }
    function verificacionSeguimiento(){
        //$idTutor=$this->input->get('FK_tutor');
        
        $this->data['alumnosdeTutor']=$this->modelo_registrar_usuarios->traertutoresTutorados();
       //$this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
       $this->load->view('interfaces/verificacion_seguimiento',$this->data);
    }
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL ADMINISTRADOR PARA LA TABLA 'usuarios'
    function cambiarPassword(){
        $this->form_validation->set_rules('actual_pswd','Ingresa tu contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Ingresa nueva contraseña','required|max_length[20]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Confirmar contraseña','required|matches[new_pswd]');
        if($this->form_validation->run()!=true){
            $this->data['posts']=$this->Modelo_login->getTutor();
            $this->load->view('interfaces/interfaz_tutor',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("matricula",$this->session->userdata("matricula"))->get();
            foreach ($sql->result() as $my_pswd) {
                $db_password=$my_pswd->pass;
                $db_matricula=$my_pswd->matricula;
            }
            if($this->input->post("actual_pswd")==$db_password){
                $fixed_pw=$this->input->post("new_pswd");
                $update=$this->db->query("UPDATE tutor SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                redirect('tutor/index');
                $this->session->set_flashdata('notification', 'User has been saved');
            }else{
                echo "ERROR";
                $this->load->view("interfaces/interfaz_tutor");
            }
        }        
    }
    //CERRAR SESIÒN
    public function logout(){
        $this->session->unset_userdata('matricula');
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
?>