<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_academico extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->view('temps/menu_cacademico');           

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->library('session');
    }
    function index(){
        $this->data['posts']=$this->Modelo_login->getAcademico();
        $this->load->view('interfaces/interfaz_cacademico',$this->data);
    }
    function gestionTutoresTutorados(){
        $this->load->view('interfaces/gestion_tutores_tutorados');
    }
    function seguimientoTutorial(){
        $this->load->view('interfaces/seguimiento_tutorial');
    }
}
?>