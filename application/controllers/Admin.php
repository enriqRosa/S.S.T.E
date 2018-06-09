<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin extends CI_Controller{
   
    function __construct(){

        parent::__construct();

        $this->load->view('temps/header');
        $this->load->view('temps/menu_admin');          

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Modelo_login');
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');
        
          
    }
    function index(){
        /*TRAE SUS DATOS COMO EL 'nombre, apPaterno, apMaterno' de su tabla para mostrarse
            en su info personal de la interfaz principal */
        $this->data['posts']=$this->Modelo_login->getAdmin();
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
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL ADMINISTRADOR PARA LA TABLA 'usuarios'
    function cambiarPassword(){
        $this->form_validation->set_rules('actual_pswd','Ingresa tu contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Ingresa nueva contraseña','required|max_length[20]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Confirmar contraseña','required|matches[new_pswd]');
        if($this->form_validation->run()!=true){
            $this->data['posts']=$this->Modelo_login->getAdmin();
            $this->load->view('interfaces/interfaz_admin',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("matricula",$this->session->userdata("matricula"))->get();
            foreach ($sql->result() as $my_pswd) {
                $db_password=$my_pswd->pass;
                $db_matricula=$my_pswd->matricula;
            }
            if($this->input->post("actual_pswd")==$db_password){
                $fixed_pw=$this->input->post("new_pswd");
                $update=$this->db->query("UPDATE usuarios SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                redirect('admin/index');
                $this->session->set_flashdata('notification', 'User has been saved');
            }else{
                echo "ERROR";
                $this->load->view("interfaces/interfaz_admin");
            }
        }        
    }
    //FUNCIÓN PARA EL BOTÓN QUE SE DIRIGA A LA INTERFAZ 'seguimiento_tutorial'
    function seguimientoTutorial(){
        $this->load->view('interfaces/seguimiento_tutorial');
    }
    //FUNCIÓN PARA AGREGAR UN NUEVO TUTOR
    function nuevoTutor(){
        $this->load->view('interfaces/gestion_tutores');
        $mat = $this->input->post('matricula');
        $nom = $this->input->post('nombre');
        $paterno = $this->input->post('ap_paterno');
        $materno = $this->input->post('ap_materno');
        $correo = $this->input->post('correo');
        $telefono = $this->input->post('telefono');
        $pass = $this->input->post('pass');
        $status = $this->input->post('status');
        $tipo = $this->input->post('tipo_usuario');
        $insertTutor = $this->modelo_registrar_usuarios->registrarTutores($mat,$nom,$paterno,$materno,$correo,$telefono,$pass,$status,$tipo);
    }
}
?>      