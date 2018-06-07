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
        $this->load->library('session');
    }
    function index(){
        $this->data['posts']=$this->Modelo_login->getTutor();
        $this->load->view('interfaces/interfaz_tutor',$this->data);
    }
    function registroSeguimiento(){
        $this->load->view('interfaces/gestion_tutores');
    }
    function verificacionSeguimiento(){
        $this->load->view('interfaces/verificacion_seguimiento');
    }
}
?>