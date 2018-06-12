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
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');
    }
    function index(){
        $this->data['mostrardatosTutorado']=$this->Modelo_login->getTutorado();
        $this->load->view('interfaces/interfaz_tutorado',$this->data);
    }
    //FUNCIÓN PARA QUE PUEDA LLENAR LOS CAMPOS 'correo' y 'telefono' DEL MODAL 'editar información'
    function editarInfo(){
        $correo = $this->input->post('correo');
        $telefono = $this->input->post('telefono');
        $insertTutor = $this->modelo_registrar_usuarios->actualizarTutorado($correo,$telefono);

        $this->data['mostrardatosTutorado']=$this->Modelo_login->getTutorado();
        $this->load->view('interfaces/interfaz_tutorado',$this->data);
    }
    function seguimientoTutorial(){
        $this->load->view('interfaces/seguimiento_tutorial');
    }
    //CERRAR SESIÒN
    public function logout(){
        $this->session->unset_userdata('matricula');
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
?>