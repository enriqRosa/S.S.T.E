<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->view('temps/menu_admin');         
        $this->load->view('temps/footer');   

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->library('session');
    }
    function index(){
        $this->data['posts']=$this->Modelo_login->getPosts();
        $this->load->view('interfaces/interfaz_admin',$this->data);
    }
    //FUNCIONES PARA CADA PÁGINA DEL MENÚ DEL ADMIN (redireccionar)
    function gestionTutores(){
        $this->load->view('interfaces/gestion_tutores');
    }
    function gestionTutorados(){
        $this->load->view('interfaces/gestion_tutorados');
    }
    function gestionCoordinadores(){
        $this->load->view('interfaces/gestion_coordinadores');
    }
    function tutoresTutorados(){
        $this->load->view('interfaces/gestion_tutores_tutorados');
    }
    function verificacionSeguimiento(){
        $this->load->view('interfaces/verificacion_seguimiento');
    }
    //FUNCIÓN PARA EL BOTÓN QUE SE DIRIGA A LA INTERFAZ 'seguimiento_tutorial'
    function seguimientoTutorial(){
        $this->load->view('interfaces/seguimiento_tutorial');
    }
}
?>