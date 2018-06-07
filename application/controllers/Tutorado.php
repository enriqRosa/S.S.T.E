<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Tutorado extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->view('temps/menu_tutorado');

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->library('session');
    }
    function index(){
        $this->load->view('interfaces/interfaz_tutorado');
    }
    function seguimientoTutorial(){
        $this->load->view('interfaces/verificacion_seguimiento');
    }
}
?>