<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Seguimiento extends CI_Controller{
    
    function __construct(){

        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('modelo_registrar_usuarios');
        $this->load->library('session');          
    }
    function index(){
        $this->load->view('temps/header_modal');
        $this->load->view('temps/header_back');
        $matricula=$this->input->get('matricula');
        
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->data['vernombreTutor']=$this->modelo_registrar_usuarios->selectnombreTutor($matricula); 
        $this->data['mostrardatosFormato']=$this->modelo_registrar_usuarios->traerdatosFormato($matricula); 
        $this->data['datoscompletosFormato']=$this->modelo_registrar_usuarios->traerdatoscompletosFormato($matricula); 
        $this->load->view('interfaces/seguimiento_tutorial',$this->data);       
    }
    function verificacionSeguimiento(){
        $this->load->view('temps/header');
        $this->load->view('temps/menu_tutor');
        $this->data['alumnosdeTutor']=$this->modelo_registrar_usuarios->traertutoresTutorados();
        $this->load->view('interfaces/verificacion_seguimiento',$this->data);
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
            redirect('tutorado/index');
        }
    }
    function actividadFormato(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $id=$this->input->get('idformato');
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->data['datosFormatoID']=$this->modelo_registrar_usuarios->datoscompletosFormatoID($id); 
        $this->data['mostrarsalon']=$this->modelo_registrar_usuarios->traersalon();
        $this->data['FK_area']=$this->modelo_registrar_usuarios->traerArea();
        $this->load->view('interfaces/modal_editarSeguimiento',$this->data);       
    }
    function editarFormato(){
         //VALIDACIONES
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('hora', 'Hora', 'required');
        $this->form_validation->set_rules('FK_lugar', 'Lugar', 'required');
        $this->form_validation->set_rules('detecto_problema', 'Detecto Problena', 'required');
        $this->form_validation->set_rules('avance', 'Avance', 'required|is_numeric');
        $this->form_validation->set_rules('FK_area', 'Area', 'required');

        if($this->form_validation->run() == FALSE){

            $this->verificacionSeguimiento();

        }else{
            $id=$this->input->post('idformato');
            $fecha=$this->input->post('fecha');
            $hora=$this->input->post('hora');
            $lugar=$this->input->post('FK_lugar');
            $avance=$this->input->post('avance');
            $problema=$this->input->post('detecto_problema');
            $pa=$this->input->post('pa');
            $pe=$this->input->post('pe');
            $c=$this->input->post('c');
            $ig=$this->input->post('ig');
            $aa=$this->input->post('aa');
            $pi=$this->input->post('pi');
            $area=$this->input->post('FK_area');
            $firma_t=$this->input->post('firma_tutor');
            $firma_to=$this->input->post('firma_alumno');

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
                $c="CANALIZACION";
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
            if($pi==NULL){
            }
                $pi="NULL";
            }elseif($pi!=NULL){
                $pi="PROBLEMAS INTERPERSONALES";
            }
        
            $data = array(
                'fecha' => $fecha,
                'hora' => $hora,
                'FK_lugar' => $lugar,
                'detecto_problema' => $problema,
                'pa' => $pa,
                'pe' => $pe,
                'c' => $c,
                'ig' => $ig,
                'aa' => $aa,
                'pi' => $pi,
                'FK_area' => $area,
                'avance' => $avance,
                'firma_tutor' => $firma_t,
                'firma_alumno' => $firma_to            
            );
            if($this->modelo_registrar_usuarios->updateSeguimiento($id,$data)){
                $this->session->set_flashdata('editar','FORMATO DE SEGUIMIENTO HA SIDO MODIFICADO CORRECTAMENTE'); 
                $this->verificacionSeguimiento();
            }
        }
    }
}