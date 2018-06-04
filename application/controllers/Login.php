<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');         
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->library('session');
        $this->load->view('temps/footer');
    }
    //CONTROLADOR PRINCIPAL AL CARGAR LA PÁGINA
    public function index(){
        $this->load->view('interfaces/index');
    }
    //AQUI SE CONSULTA LAS TABLAS Y DEPENDIENDO DE LA CONSULTA MANDA A CONTROLADOR DEL USUARIO
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
                elseif($this->session->userdata('tipo_usuario')=="CA"){
                    redirect('c_academico/index');
                }
                //USUARIO COORDINADOR INSTITUCIONAL
                elseif($this->session->userdata('tipo_usuario')=='CI'){
                    redirect('c_institucional/index');
                }
        }
    }
}

?>