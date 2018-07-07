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
        //VALIDACIONES
        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required|exact_length[10]|is_numeric');

        if($this->form_validation->run() == FALSE){
           
            $this->index();

        }else{
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $insertTutor = $this->modelo_registrar_usuarios->actualizarTutorado($correo,$telefono);
            $this->session->set_flashdata('registro','EL CORREO Y TELEFONO SE HAN REGISTRADO EXITOSAMENTE'); 
           $this->index();
        }
    }
    function seguimientoTutorial(){
        $this->load->view('interfaces/seguimiento_tutorial');
    }
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL ADMINISTRADOR PARA LA TABLA 'usuarios'
    function cambiarPassword(){
        //VALIDACIONES
        $this->form_validation->set_rules('actual_pswd','Ingresa tu contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Ingresa nueva contraseña','required|max_length[20]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Confirmar contraseña','required|matches[new_pswd]');
        
        if($this->form_validation->run()!=true){
            $this->data['mostrardatosTutorado']=$this->Modelo_login->getTutorado();
            $this->load->view('interfaces/interfaz_tutorado',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("matricula",$this->session->userdata("matricula"))->get();
            foreach ($sql->result() as $my_pswd) {
                md5($db_password=$my_pswd->pass);
                $db_matricula=$my_pswd->matricula;
                $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                $fixed_pw=md5($this->input->post("new_pswd"));
                $update=$this->db->query("UPDATE tutorado SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                $this->data['mostrardatosTutorado']=$this->Modelo_login->getTutorado();
                $this->load->view('interfaces/interfaz_tutorado',$this->data);
            }
        }
    }        
}
?>