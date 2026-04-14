<?php
    class bpientry extends CI_Controller{
        public function __construct() {
            parent::__construct();
            //your modal here.
            $this->load->helper("url");
            $this->load->library("form_validation");
        }

        public function index() {
            $data["title"] = "BPI Data Entry";
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('bpientry_v');
            $this->load->view('common/footer');
        }   
    }
?>