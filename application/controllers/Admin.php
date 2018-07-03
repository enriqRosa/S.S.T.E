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
        $this->load->library('form_validation');        
    }
    function index(){
        /*TRAE SUS DATOS COMO EL 'nombre, apPaterno, apMaterno' DE SU TABLA PARA MOSTRARSE
            EN SU INFO PERSONAL DE LA INTERFAZ PRINCIPAL */
        $this->data['posts']=$this->Modelo_login->getAdmin();
        $this->load->view('interfaces/interfaz_admin',$this->data);
    }
    /****************************************************************VALIDACIONES*******************************************************/
    function validacionesRegistrarUsuarios(){
        $this->form_validation->set_rules('matricula', 'Matricula', 'required|min_length[9]|is_unique[usuarios.matricula]|is_numeric');
        //$this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha');
        $this->form_validation->set_rules('ap_paterno', 'Apellido Paterno', 'required|alpha');
        $this->form_validation->set_rules('ap_materno', 'Apellido Materno', 'required|alpha');
        $this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd', 'Confirmar Contraseña', 'required|min_length[6]|matches[pass]');
        $this->form_validation->set_rules('tipo_usuario', 'Tipo Usuario', 'required|exact_length[2]|alpha');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }
    function validacionesCorreoTelefono(){
        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required|exact_length[10]|is_numeric');
    }
    function validacionesEditarUsuarios(){
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha');
        $this->form_validation->set_rules('ap_paterno', 'Apellido Paterno', 'required|alpha');
        $this->form_validation->set_rules('ap_materno', 'Apellido Materno', 'required|alpha');
        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required|exact_length[10]|is_numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }
    /*************************************************FUNCIONES PARA TUTOR**************************************************************** */
    //FUNCION PARA (redireccionar) EN EL MENÚ DEL ADMIN
    function gestionTutores(){
        /*TRAE TODOS LOS DATOS DEL TUTOR QUE HAN SIDO REGISTRADOS PARA MOSTRARSE EN LA INTERFAZ (TABLA)*/
        $this->data['mostrardatosTutor']=$this->modelo_registrar_usuarios->mostrardatosTutor();
        $this->load->view('interfaces/gestion_tutores',$this->data);
    }
    //FUNCIÓN PARA AGREGAR UN NUEVO TUTOR
    function nuevoTutor(){
        //VALIDACIONES
        $this->validacionesRegistrarUsuarios();
        $this->validacionesCorreoTelefono();
            
        if($this->form_validation->run() == FALSE){
           
            $this->gestionTutores();

        }else{
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $nom = strtoupper($nom);//INSERTA VALORES EN MAYÙSCULAS
            $paterno = $this->input->post('ap_paterno');
            $paterno = strtoupper($paterno);
            $materno = $this->input->post('ap_materno');
            $materno = strtoupper($materno);
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $pass = $this->input->post('pass');
            $status = $this->input->post('status');
            $status = strtoupper($status);
            $tipo = $this->input->post('tipo_usuario');
            $tipo = strtoupper($tipo);

            $data = array(
                'matricula' => $mat,
                'nombre' => $nom,
                'ap_paterno' => $paterno,
                'ap_materno' => $materno,
                'correo' => $correo,
                'telefono' => $telefono,
                'pass' => md5($pass),
                'status' => $status,
                'tipo_usuario' => $tipo
            );
            if ($this->modelo_registrar_usuarios->registrarTutores($data)){
                //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestion_tutores'
                $this->session->set_flashdata('registro','EL TUTOR SE HA REGISTRADO EXITOSAMENTE'); 
                $this->gestionTutores();
            }else{
                echo "no registrado";
            }
        }
    }
    function editar(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosTutor']=$this->modelo_registrar_usuarios->traerdatosTutor($matricula);
        $this->load->view('interfaces/modal_editarTutor',$this->data);
    }
    function actualizarTutor(){
        //VALIDACIONES
        $this->validacionesEditarUsuarios();
        
        if($this->form_validation->run() == FALSE){

            $this->gestionTutores();
        }else{
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $nom = strtoupper($nom);//INSERTA VALORES EN MAYÙSCULAS
            $paterno = $this->input->post('ap_paterno');
            $paterno = strtoupper($paterno);
            $materno = $this->input->post('ap_materno');
            $materno = strtoupper($materno);
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $status = $this->input->post('status');
            $status = strtoupper($status);

            $data = array(
                'matricula' => $mat,
                'nombre' => $nom,
                'ap_paterno' => $paterno,
                'ap_materno' => $materno,
                'correo' => $correo,
                'telefono' => $telefono,
                'status' => $status
            );
            if($this->modelo_registrar_usuarios->updateTutor($data,$mat)){
                $this->session->set_flashdata('editar','EL TUTOR SE HA MODIFICADO CORRECTAMENTE'); 
                $this->data['mostrardatosTutor']=$this->modelo_registrar_usuarios->mostrardatosTutor();
                $this->load->view('interfaces/gestion_tutores',$this->data);
            }
        }
    }
    /*************************************************FUNCIONES PARA TUTORADOS*************************************************************** */
    //FUNCION PARA (redireccionar) EN EL MENÚ DEL ADMIN
    function gestionTutorados(){
        /*TRAE TODOS LOS DATOS DEL TUTORADO QUE HAN SIDO REGISTRADOS PARA MOSTRARSE EN LA INTERFAZ (TABLA)*/
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
        $this->load->view('interfaces/gestion_tutorados',$this->data);
    }
    function nuevoTutorado(){
        //VALIDACIONES
        $this->validacionesRegistrarUsuarios();
        $this->form_validation->set_rules('carrera', 'Carrera', 'required|alpha|exact_length[3]');
        $this->form_validation->set_rules('semestre', 'Semestre', 'required');
        $this->form_validation->set_rules('programa', 'Programa', 'required|alpha|exact_length[8]');
        $this->form_validation->set_rules('tipo_tutoria', 'Tipo Tutoria', 'required|exact_length[18]');
        $this->form_validation->set_rules('grupo', 'Grupo', 'required');

        if($this->form_validation->run() == FALSE){

            $this->gestionTutorados();

        }else{
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $nom = strtoupper($nom);
            $paterno = $this->input->post('ap_paterno');
            $paterno = strtoupper($paterno);
            $materno = $this->input->post('ap_materno');
            $materno = strtoupper($materno);
            $carrera = $this->input->post('carrera');
            $carrera = strtoupper($carrera);
            $semestre = $this->input->post('semestre');
            $semestre = strtoupper($semestre);
            $prog = $this->input->post('programa');
            $prog = strtoupper($prog);
            $tutoria = $this->input->post('tipo_tutoria');
            $tutoria = strtoupper($tutoria);
            $grupo = $this->input->post('grupo');
            $pass = $this->input->post('pass');
            $tipo = $this->input->post('tipo_usuario');
            $tipo = strtoupper($tipo);
            $status = $this->input->post('status');
            $status = strtoupper($status);
            
            $data = array(
                'matricula' => $mat,
                'nombre' => $nom,
                'ap_paterno' => $paterno,
                'ap_materno' => $materno,
                'carrera' => $carrera,
                'semestre' => $semestre,
                'programa' => $prog,
                'tipo_tutoria' => $tutoria,
                'grupo' => $grupo,
                'pass' => md5($pass),
                'tipo_usuario' => $tipo,
                'status' => $status
            );
            if ($this->modelo_registrar_usuarios->registrarTutorado($data)){
                //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestion_tutores'
                $this->session->set_flashdata('registro','El Tutorado se ha registrado exitosamente'); 
                $this->gestionTutorados();
            }else{
                echo "no registrado";
            }
        }    
    }
    function editarTutorado(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->load->view('interfaces/modal_editarTutorado',$this->data);
    }
    function actualizarTutorado(){
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha');
        $this->form_validation->set_rules('ap_paterno', 'Apellido Paterno', 'required|alpha');
        $this->form_validation->set_rules('ap_materno', 'Apellido Materno', 'required|alpha');
        $this->form_validation->set_rules('carrera', 'Carrera', 'required|alpha|exact_length[3]');
        $this->form_validation->set_rules('semestre', 'Semestre', 'required');
        $this->form_validation->set_rules('programa', 'Programa', 'required|alpha|exact_length[8]');
        $this->form_validation->set_rules('tipo_tutoria', 'Tipo Tutoria', 'required|exact_length[18]');
        $this->form_validation->set_rules('grupo', 'Grupo', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if($this->form_validation->run() == FALSE){
            
            $this->gestionTutorados();

        }else{
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $nom = strtoupper($nom);
            $paterno = $this->input->post('ap_paterno');
            $paterno = strtoupper($paterno);
            $materno = $this->input->post('ap_materno');
            $materno = strtoupper($materno);
            $carrera = $this->input->post('carrera');
            $semestre = $this->input->post('semestre');
            $semestre = strtoupper($semestre);
            $prog = $this->input->post('programa');
            $grupo = $this->input->post('grupo');
            $tutoria = $this->input->post('tipo_tutoria');
            $status = $this->input->post('status');
            
            $data = array(
                'matricula' => $mat,
                'nombre' => $nom,
                'ap_paterno' => $paterno,
                'ap_materno' => $materno,
                'carrera' => $carrera,
                'semestre' => $semestre,
                'programa' => $prog,
                'grupo' => $grupo,
                'tipo_tutoria' => $tutoria,
                'status' => $status
            );
            if($this->modelo_registrar_usuarios->updateTutorado($data,$mat)){
                $this->session->set_flashdata('editar','EL TUTOR SE HA MODIFICADO CORRECTAMENTE'); 
                $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
                $this->load->view('interfaces/gestion_tutorados',$this->data);
            }
        }
    }
    /*************************************************FUNCIONES PARA COORDINADORES************************************************************* */
    function gestionCoordinadores(){
        $this->data['mostrardatosCoord']=$this->modelo_registrar_usuarios->mostrardatosCoordinador();
        $this->load->view('interfaces/gestion_coordinadores',$this->data);
    }
    function nuevoCoordinador(){
        //VALIDACIONES
        $this->validacionesRegistrarUsuarios();
        $this->validacionesCorreoTelefono();

        if($this->form_validation->run() == FALSE){

            $this->gestionCoordinadores();

        }else{       
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $nom = strtoupper($nom);
            $paterno = $this->input->post('ap_paterno');
            $paterno = strtoupper($paterno);
            $materno = $this->input->post('ap_materno');
            $materno= strtoupper($materno);
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $pass = $this->input->post('pass');
            $tipo = $this->input->post('tipo_usuario');
            $tipo = strtoupper($tipo);
            $status = $this->input->post('status');
            $status = strtoupper($status);
            
            $data = array(
                'matricula' => $mat,
                'nombre' => $nom,
                'ap_paterno' => $paterno,
                'ap_materno' => $materno,
                'correo' => $correo,
                'telefono' => $telefono,
                'pass' => md5($pass),
                'tipo_usuario' => $tipo,
                'status' => $status
            );

            if ($this->modelo_registrar_usuarios->registrarCoordinador($data)){
                //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestionCoordinadores'
                $this->session->set_flashdata('registro','EL COORDINADOR SE HA REGISTRADO CORRECTAMENTE'); 
                $this->gestionCoordinadores();
            }else{
                echo "no registrado";
            }
        }
    }
    function editarCoordinador(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosCoord']=$this->modelo_registrar_usuarios->traerdatosCoordinador($matricula);
        $this->load->view('interfaces/modal_editarCoordinador',$this->data);
    }
    function actualizarCoord(){
        //VALIDACIONES
        $this->validacionesEditarUsuarios();

        if($this->form_validation->run() == FALSE){

            $this->gestionCoordinadores();
        
        }else{
            $mat = $this->input->post('matricula');
            $nom = $this->input->post('nombre');
            $nom = strtoupper($nom);
            $paterno = $this->input->post('ap_paterno');
            $paterno = strtoupper($paterno);
            $materno = $this->input->post('ap_materno');
            $materno= strtoupper($materno);
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $status = $this->input->post('status');
            $status = strtoupper($status);
            
            $data = array(
                'matricula' => $mat,
                'nombre' => $nom,
                'ap_paterno' => $paterno,
                'ap_materno' => $materno,
                'correo' => $correo,
                'telefono' => $telefono,
                'status' => $status
            );
            if($this->modelo_registrar_usuarios->updateCoord($data,$mat)){
                $this->session->set_flashdata('editar','EL COORDINADOR SE HA MODIFICADO CORRECTAMENTE'); 
                $this->gestionCoordinadores();
            }
        }
    }
    /**************************************ASIGNACION DE TUTORES A TUTORADOS FUNCIONES***********************************************/
    function tutoresTutorados(){       
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
        $this->load->view('interfaces/gestion_tutores_tutorados',$this->data);   
    }
    function mostrarTutores(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['tutoresActivos']=$this->modelo_registrar_usuarios->tutoresActivos(); 
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->load->view('interfaces/modal_asignarTutor',$this->data);
    }
    function asignarTutor(){
        $this->form_validation->set_rules('FK_tutor', 'Asignar Tutor', 'required');

        if($this->form_validation->run() == FALSE){

            $this->tutoresTutorados();

        }else{
            $mat = $this->input->post('matricula');
            $tutor=$this->input->post('FK_tutor');

            $data = array(
                'matricula' => $mat,
                'FK_tutor'  => $tutor
            );
            if($this->modelo_registrar_usuarios->FKtutor($mat,$data)){
                $this->session->set_flashdata('registro','SE HA ASIGNADO EL TUTOR EXITOSAMENTE'); 
                $this->tutoresTutorados();
            }
        }
    } 
    function cambiarTutor(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->data['tutoresActivos']=$this->modelo_registrar_usuarios->tutoresActivos();
        $this->data['vernombreTutor']=$this->modelo_registrar_usuarios->selectnombreTutor($matricula); 
        $this->load->view('interfaces/modal_cambiarTutor',$this->data);       
    }
    function renovarTutor(){  
        $this->form_validation->set_rules('FK_tutor', 'Asignar Tutor', 'required');

        if($this->form_validation->run() == FALSE){

            $this->renovarTutor();
        }else{
            $mat=$this->input->post('matricula');
            $tutor=$this->input->post('FK_tutor');

            $data = array(
                'matricula' => $mat,
                'FK_tutor'  => $tutor
            );

            if($this->modelo_registrar_usuarios->cambiarasignaciontutor($mat,$data)){
                $this->session->set_flashdata('editar','SE HA CAMBIADO EL TUTOR CORRECTAMENTE'); 
                $this->tutoresTutorados();
            }
        }
    }      
    /****************************************FUNCIONES PARA LA VERIFICACIÓN DE SEGUIMIENTO**************************************************/
    function verificacionSeguimiento(){
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
        $this->load->view('interfaces/verificacion_seguimiento',$this->data);
    }
    /************************************************************************************************************************************** */
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL ADMINISTRADOR PARA LA TABLA 'usuarios'
    function cambiarPassword(){
        //VALIDACIONES
        $this->form_validation->set_rules('actual_pswd','Ingresa tu contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Ingresa nueva contraseña','required|max_length[10]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Confirmar contraseña','required|matches[new_pswd]');

        if($this->form_validation->run()==FALSE){
            $this->data['posts']=$this->Modelo_login->getAdmin();
            $this->load->view('interfaces/interfaz_admin',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("matricula",$this->session->userdata("matricula"))->get();
            foreach ($sql->result() as $my_pswd) {
                $db_password=$my_pswd->pass;
                $db_matricula=$my_pswd->matricula;        
                $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                $fixed_pw=$this->input->post("new_pswd");
                $update=$this->db->query("UPDATE administrador SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                $this->data['posts']=$this->Modelo_login->getAdmin();
                $this->load->view('interfaces/interfaz_admin',$this->data);
            
            } 
        }       
    }
}
?>      