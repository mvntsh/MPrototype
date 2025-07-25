<?php
    class Home extends CI_Controller{
        public function __construct() {
            parent::__construct();
            //This is where you can load models, libraries, etc.
        }

        public function index(){
            $data['title'] = 'Home';

            $this->load->view('common/header', $data);
            $this->load->view('home_v');
            $this->load->view('common/footer');
        }
    }
    
?>