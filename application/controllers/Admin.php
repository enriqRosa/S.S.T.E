<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');         
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
}
?>