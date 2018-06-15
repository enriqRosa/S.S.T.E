<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Seguimiento extends CI_Controller{
    
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');          
    }
    function index(){
        $this->load->view('temps/header_back');
        $this->load->view('interfaces/seguimiento_tutorial');          
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