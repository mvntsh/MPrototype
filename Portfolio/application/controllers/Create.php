<?php
    class Create extends CI_Controller{
        public function __construct() {
            parent::__construct();
            // This is where you can load models, libraries, etc.
        }

        public function index(){
            $data['title'] = 'Create';
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('create_v',$data);
            $this->load->view('common/footer');
        }
    }
    
?>