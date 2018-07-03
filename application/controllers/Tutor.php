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
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');
    }
    function index(){
        $this->data['posts']=$this->Modelo_login->getTutor();
        $this->load->view('interfaces/interfaz_tutor',$this->data);
    }
    function verificacionSeguimiento(){
        $this->data['alumnosdeTutor']=$this->modelo_registrar_usuarios->traertutoresTutorados();
       $this->load->view('interfaces/verificacion_seguimiento',$this->data);
    }
    //FUNCIONES PARA REGISTRAR ACTIVIDADES DEL FORMATO
    function registrarFormato(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->load->view('interfaces/modal_registrarFormato',$this->data);
    }
    function registraralumnosFormato(){
        //VALIDACIONES
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('hora', 'Hora', 'required');
        $this->form_validation->set_rules('lugar', 'Lugar', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('detecto_problema', 'Detecto Problena', 'required');
        $this->form_validation->set_rules('avance', 'Avance', 'required|is_numeric');

        if($this->form_validation->run() == FALSE){

            $this->verificacionSeguimiento();

        }else{
            $fecha=$this->input->post('fecha');
            $hora=$this->input->post('hora');
            $salon=$this->input->post('lugar');
            $problema=$this->input->post('detecto_problema');
            $avance=$this->input->post('avance');
            $pa=$this->input->post('pa');
            $pe=$this->input->post('pe');
            $c=$this->input->post('c');
            $ig=$this->input->post('ig');
            $aa=$this->input->post('aa');
            $pi=$this->input->post('pi');
            $area=$this->input->post('area');
            $mat=$this->input->post('matricula');

            if($pa==NULL){
                $pa="NULL";
            }elseif($pa!=NULL){
                $pa="PROBLEMAS ACADEMICOS";
            }
            if($pe==NULL){
                $pe="NULL";
            }elseif($pe!=NULL){
                $pe="PROBLEMAS EMOCIONALES";
            }
            if($c==NULL){
                $c="NULL";
            }elseif($c!=NULL){
                $c="CANALIZACIÓN";
            }
            if($ig==NULL){
                $ig="NULL";
            }elseif($ig!=NULL){
                $ig="INFORMACION GENERAL";
            }
            if($aa==NULL){
                $aa="NULL";
            }
            elseif($aa!=NULL){
                $aa="ASESORIA ACADEMICA";
            }
            if($pi==NULL){
                $pi="NULL";
            }
            elseif($pi!=NULL){
                $pi="PROBLEMAS INTERPERSONALES";
            }

            $data = array(
                'fecha'  => $fecha,
                'hora' => $hora,
                'detecto_problema' => $problema,
                'area' => $area,
                'lugar' => $salon,
                'avance' => $avance,    
                'pa' => $pa,
                'pe' => $pe,
                'c' => $c,
                'ig' => $ig,
                'aa' => $aa,
                'pi' => $pi,            
                'FK_tutoradoindividual' => $mat,
                
            ); 
            if($this->modelo_registrar_usuarios->insertarFormato($data)){
                $this->session->set_flashdata('registro','FORMATO DE SEGUIMIENTO TUTORÍAL REGISTRADO EXITOSAMENTE'); 
                $this->verificacionSeguimiento();
            }
        }
    }
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL ADMINISTRADOR PARA LA TABLA 'usuarios'
    function cambiarPassword(){
        //VALIDACIONES
        $this->form_validation->set_rules('actual_pswd','Ingresa tu contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Ingresa nueva contraseña','required|max_length[20]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Confirmar contraseña','required|matches[new_pswd]');
        
        if($this->form_validation->run()==FALSE){
            $this->data['posts']=$this->Modelo_login->getTutor();
            $this->load->view('interfaces/interfaz_tutor',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("matricula",$this->session->userdata("matricula"))->get();
            foreach ($sql->result() as $my_pswd) {
                $db_password=$my_pswd->pass;
                $db_matricula=$my_pswd->matricula;
                $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                $fixed_pw=$this->input->post("new_pswd");
                $update=$this->db->query("UPDATE tutor SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                $this->data['posts']=$this->Modelo_login->getTutor();
                $this->load->view('interfaces/interfaz_tutor',$this->data);
            }
        }        
    }
}
?>

 