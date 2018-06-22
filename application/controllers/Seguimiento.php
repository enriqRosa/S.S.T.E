<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Seguimiento extends CI_Controller{
    
    function __construct(){

        parent::__construct();

        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');          
    }
    function index(){
        $this->load->view('temps/header_modal');
        $this->load->view('temps/header_back');
        $matricula=$this->input->get('matricula');
        
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->data['vernombreTutor']=$this->modelo_registrar_usuarios->selectnombreTutor($matricula); 
        $this->data['mostrardatosFormato']=$this->modelo_registrar_usuarios->traerdatosFormato($matricula); 
        $this->data['mostrarmotivosFormato']=$this->modelo_registrar_usuarios->traermotivosFormato($matricula); 
        $this->data['mostrarsalonFormato']=$this->modelo_registrar_usuarios->traersalonFormato($matricula); 
        $this->data['FK_area']=$this->modelo_registrar_usuarios->traerArea();
        $this->data['mostrarareaFormato']=$this->modelo_registrar_usuarios->traerareaFormato($matricula); 
        $this->load->view('interfaces/seguimiento_tutorial',$this->data);       
    }
    function editarFormato(){
        $problema=$this->input->post('detecto_problema');
        $avance=$this->input->post('avance');
        $pa=$this->input->post('pa');
        $pe=$this->input->post('pe');
        $c=$this->input->post('c');
        $ig=$this->input->post('ig');
        $aa=$this->input->post('aa');
        $pi=$this->input->post('pi');
        
    }
    function back(){        
        if($this->session->userdata('tipo_usuario')=="AD"){
            redirect('admin/verificacionSeguimiento');
        }
        elseif($this->session->userdata('tipo_usuario')=="CA"){
            redirect('c_academico/verificacionSeguimiento');
        }
        elseif($this->session->userdata('tipo_usuario')=='CI'){
            redirect('c_institucional/verificacionSeguimiento');
        }
        elseif($this->session->userdata('tipo_usuario')=='TU'){
            redirect('tutor/verificacionSeguimiento');
        }
        elseif($this->session->userdata('tipo_usuario')=='TO'){
            redirect('tutorado/verificacionSeguimiento');
        }
    }
}