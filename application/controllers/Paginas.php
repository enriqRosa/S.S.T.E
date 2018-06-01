<!--CONTROLADOR PRINCIPAL PARA LAS INETRFACES*/
<?php
    class Paginas extends CI_controller{
        /*MUESTRA LA INTERFAZ PRINCIPAL QUE ES EL INDEX.PHP(LOGIN)*/
        public function view($pagina = 'index'){
            /*SI LA PAGINA NO EXISTE MOSTRARÁ LA PÁGINA DE 404 ERROR*/
            if (!file_exists(APPPATH.'views/paginas/'.$pagina.'.php')) {
                show_404();
            }
            /*SI LA PÁGINA SI EXISTE CARGARÁ LOS ARCHIVOS PRINCIPALES QUE SON EL HEADER.PHP
            Y EL FOOTER.PHP*/
            //$data['titulo']=ucfirst($pagina);
            $this->load->view('temps/header');
            /*CARGARÁ CUALQUER PÁGINA QUE SE ENCUENTRE EN EL ARCHIVO VIEW/PAGINAS*/
            $this->load->view('paginas/'.$pagina,$data);
            $this->load->view('temps/footer');
        }
    }
    
    
?>