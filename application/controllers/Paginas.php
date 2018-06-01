<?php
    class Paginas extends CI_controller{
        public function view($pagina = 'index'){
            if (!file_exists(APPPATH.'views/paginas/'.$pagina.'.php')) {
                show_404();
            }
            $data['titulo']=ucfirst($pagina);
            $this->load->view('temps/header');
            $this->load->view('paginas/'.$pagina,$data);
            $this->load->view('temps/footer');
        }
    }
    
    
?>