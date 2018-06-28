<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller{
   
    function __construct(){

        parent::__construct(); 
        //$this->load->view('temps/menu_index');  
        //$this->load->view('temps/header');       
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->library('session');
        //$this->load->view('interfaces/footer');
    }
    //CONTROLADOR PRINCIPAL AL CARGAR LA PÁGINA
    public function index(){
        $this->load->library('form_validation');
        $this->load->view('temps/header_index');
        $this->load->view('temps/header');         
        $this->load->view('interfaces/index');
    }
    //AQUI SE CONSULTA LAS TABLAS Y DEPENDIENDO DE LA CONSULTA MANDA A CONTROLADOR DEL USUARIO
    function proceso_login(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        
        $mat=$this->input->post('matricula');
        $pass=$this->input->post('pass');

        $this->form_validation->set_rules('matricula', 'Usuario', 'required');
        $this->form_validation->set_rules('pass', 'Contraseña', 'required');

        if($this->form_validation->run()==FALSE){
            redirect(base_url());
        }else{
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
                elseif($this->session->userdata('tipo_usuario')=="CA"){
                    redirect('c_academico/index');
                }
                //USUARIO COORDINADOR INSTITUCIONAL
                elseif($this->session->userdata('tipo_usuario')=='CI'){
                    redirect('c_institucional/index');
                }
                elseif($this->session->userdata('tipo_usuario')=='TU'){
                    redirect('tutor/index');
                }
                elseif($this->session->userdata('tipo_usuario')=='TO'){
                    redirect('tutorado/index');
                }
               
        }
        }



    }
     //CERRAR SESIÒN
     public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

?>


