<?php
    class archives extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model("insert_m");
            $this->load->helper("url");
            $this->load->library("session");
        }

        public function index() {
            $data["title"] = "BPI Data Archive";
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('archives_v');
            $this->load->view('common/footer');
        }
    }
?>