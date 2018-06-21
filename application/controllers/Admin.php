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
        /*TRAE SUS DATOS COMO EL 'nombre, apPaterno, apMaterno' DE SU TABLA PARA MOSTRARSE
            EN SU INFO PERSONAL DE LA INTERFAZ PRINCIPAL */
        $this->data['posts']=$this->Modelo_login->getAdmin();
        $this->load->view('interfaces/interfaz_admin',$this->data);
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
        $tipo = $this->input->post('tipo_usuario');

        $data = array(
            'matricula' => $mat,
            'nombre' => $nom,
            'ap_paterno' => $paterno,
            'ap_materno' => $materno,
            'correo' => $correo,
            'telefono' => $telefono,
            'pass' => $pass,
            'status' => $status,
            'tipo_usuario' => $tipo
        );
        if ($this->modelo_registrar_usuarios->registrarTutores($data)){
            //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestion_tutores'
            $this->gestionTutores();
        }else{
            echo "no registrado";
        }
    }
    function editar(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosTutor']=$this->modelo_registrar_usuarios->traerdatosTutor($matricula);
        $this->load->view('interfaces/modal_editarTutor',$this->data);
    }
    function actualizarTutor(){
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
            $this->data['mostrardatosTutor']=$this->modelo_registrar_usuarios->mostrardatosTutor();
            $this->load->view('interfaces/gestion_tutores',$this->data);
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
        $tutoria = $this->input->post('tipo_tutoria');
        $grupo = $this->input->post('grupo');
        $pass = $this->input->post('pass');
        $tipo = $this->input->post('tipo_usuario');
        $status = $this->input->post('status');
        
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
            'pass' => $pass,
            'tipo_usuario' => $tipo,
            'status' => $status
        );
        if ($this->modelo_registrar_usuarios->registrarTutorado($data)){
            //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestion_tutores'
            $this->gestionTutorados();
        }else{
            echo "no registrado";
        }
    }
    function editarTutorado(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->load->view('interfaces/modal_editarTutorado',$this->data);
    }
    function actualizarTutorado(){
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
            $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
            $this->load->view('interfaces/gestion_tutorados',$this->data);
        }
    }
    /*************************************************FUNCIONES PARA COORDINADORES************************************************************* */
    function gestionCoordinadores(){
        $this->data['mostrardatosCoord']=$this->modelo_registrar_usuarios->mostrardatosCoordinador();
        $this->load->view('interfaces/gestion_coordinadores',$this->data);
    }
    function nuevoCoordinador(){
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
        $status = $this->input->post('status');
        
        $data = array(
            'matricula' => $mat,
            'nombre' => $nom,
            'ap_paterno' => $paterno,
            'ap_materno' => $materno,
            'correo' => $correo,
            'telefono' => $telefono,
            'pass' =>$pass,
            'tipo_usuario' => $tipo,
            'status' => $status
        );

        if ($this->modelo_registrar_usuarios->registrarCoordinador($data)){
            //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestionCoordinadores'
            $this->gestionCoordinadores();
        }else{
            echo "no registrado";
        }
    }
    function editarCoordinador(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosCoord']=$this->modelo_registrar_usuarios->traerdatosCoordinador($matricula);
        $this->load->view('interfaces/modal_editarCoordinador',$this->data);
    }
    function actualizarCoord(){
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
            $this->data['mostrardatosCoord']=$this->modelo_registrar_usuarios->mostrardatosCoordinador();
            $this->load->view('interfaces/gestion_coordinadores',$this->data);
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
        $mat = $this->input->post('matricula');
        $tutor=$this->input->post('FK_tutor');

        $data = array(
            'matricula' => $mat,
            'FK_tutor'  => $tutor
        );
        if($this->modelo_registrar_usuarios->FKtutor($mat,$data)){
            $this->tutoresTutorados();
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
        $mat=$this->input->post('matricula');
        $tutor=$this->input->post('FK_tutor');

        $data = array(
            'matricula' => $mat,
            'FK_tutor'  => $tutor
        );

        if($this->modelo_registrar_usuarios->cambiarasignaciontutor($mat,$data)){
            $this->tutoresTutorados();
        }
    }      
    /****************************************FUNCIONES PARA LA VERIFICACIÓN DE SEGUIMIENTO**************************************************/
    function verificacionSeguimiento(){
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->mostrardatosTutorado();
        $this->load->view('interfaces/verificacion_seguimiento',$this->data);
    }
    function registrarFormato(){
        $this->load->view('temps/header_modal');
        $matricula=$this->input->get('matricula');
        $this->data['mostrardatosTutorado']=$this->modelo_registrar_usuarios->traerdatosTutorado($matricula);
        $this->data['mostrarsalon']=$this->modelo_registrar_usuarios->traersalon();
        $this->data['FK_area']=$this->modelo_registrar_usuarios->traerArea();
        $this->load->view('interfaces/modal_registrarFormato',$this->data);
    }
    function registraralumnosFormato(){
        $fecha=$this->input->post('fecha');
        $hora=$this->input->post('hora');
        $salon=$this->input->post('FK_lugar');
        $problema=$this->input->post('detecto_problema');
        $avance=$this->input->post('avance');
        $pa=$this->input->post('pa');
        $pe=$this->input->post('pe');
        $c=$this->input->post('c');
        $ig=$this->input->post('ig');
        $aa=$this->input->post('aa');
        $pi=$this->input->post('pi');
        $area=$this->input->post('FK_area');
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
        }
        if($pi==NULL){
            $pi="NULL";
        }elseif($pi!=NULL){
            $pi="PROBLEMAS INTERPERSONALES";
        }
        
        $data = array(
            'fecha'  => $fecha,
            'hora' => $hora,
            'pa' => $pa,
            'pe' => $pe,
            'c' => $c,
            'ig' => $ig,
            'aa' => $aa,
            'pi' => $pi,
            'detecto_problema' => $problema,
            'avance' => $avance,    
            'FK_area' => $area,
            'FK_tutoradoindividual' => $mat,
            'FK_lugar' => $salon
        ); 
        if($this->modelo_registrar_usuarios->insertarFormato($data)){
            $this->verificacionSeguimiento();
        }
    }
    /************************************************************************************************************************************** */
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
                $update=$this->db->query("UPDATE administrador SET pass='$fixed_pw' WHERE matricula='$db_matricula'")or die(mysqli_error());
                redirect('admin/index');
                $this->session->set_flashdata('notification', 'User has been saved');
            }else{
                echo "ERROR";
                $this->load->view("interfaces/interfaz_admin");
            }
        }        
    }
    //CERRAR SESIÒN
    public function logout(){
        $this->session->unset_userdata('matricula');
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
?>      