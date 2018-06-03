<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->library('session');
        }

    public function index(){
        $this->load->view('interfaces/index');
    }

    function proceso_login(){
        $mat=$this->input->post('matricula');
        $pass=$this->input->post('password');
        
        /*SE PASAN LAS VARIABLES COMO PARÁMETROS EN LA FUNCIÓN 'login'*/
        /*'Modelo_login' NOMBRE DE LA CLASE DEL MODELO*/
        $checklogin=$this->Modelo_login->login($mat,$pass);
        if($checklogin){
            foreach ($checklogin as $row);
                $this->session->set_userdata('matricula',$row->matricula);
                $this->session->set_userdata('tipo_usuario',$row->tipo_usuario);
                //USARIO ADMINISTRADOR
                if($this->session->userdata('tipo_usuario')=="AD"){
                    redirect('admin/index');
                }
                //USUARIO COORDINADOR ACADEMICO
                elseif($this->session->userdata('tipo_usuario')=="TU"){
                    redirect('tutor/index');
            }else{
                $data['error']="Usuario o contraseña invalidos.";
                $this->load->view('interfaces/index');
            }
    }
    
}

}

?>