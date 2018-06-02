<?php
    class Paginas extends CI_controller{
        public function view($pagina = 'index'){
            if (!file_exists(APPPATH.'views/interfaces/'.$pagina.'.php')) {
                show_404();
            }
            //$data['titulo']=ucfirst($pagina);
            $this->load->view('temps/header');
            $this->load->view('interfaces/'.$pagina);         
            $this->load->view('temps/footer');            
        }
        public function __construct(){
            parent::__construct();
            $this->load->model('Modelo_login');
            $this->load->library('session');
            }
        function index(){
            $this->load->view('paginas/index');
        }
        /*FUNCIÓN DE LA VISTA paginas/index.php'*/
        function proceso_login(){
            $mat=$this->input->post('matricula');
            $pass=$this->input->post('password');
            /*SE PASAN LAS VARIABLES COMO PARÁMETROS EN LA FUNCIÓN 'login'*/
            /*'Modelo_login' NOMBRE DE LA CLASE DEL MODELO*/
            $checklogin=$this->Modelo_login->login($mat,$pass);
            if($checklogin){
                foreach ($checklogin as $row) {
                    $this->session->set_userdata('matricula',$row->matricula);
                    $this->session->set_userdata('tipo_usuario',$row->tipo_usuario);
                    //USARIO ADMINISTRADOR
                    if($this->session->userdata('tipo_usuario')=="AD"){
                        redirect('paginas/interfaz_admin');
                    }
                    //USUARIO COORDINADOR ACADEMICO
                    elseif($this->session->userdata('tipo_usuario')=="CA"){
                        redirect('paginas/interfaz_tutor');
                }else{
                    $data['error']="Usuario o contraseña invalidos";
                    $this->load->view('paginas/index',$data);
                }
            }
        }
    }
    
}
?>