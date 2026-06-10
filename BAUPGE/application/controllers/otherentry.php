<?php
    class otherentry extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model("insert_m");
            $this->load->helper("url");
            $this->load->library("session");
            $this->load->library("form_validation");
        }

        public function index() {
            $data["title"] = "Other Bank Data Entry";
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('otherentry_v');
            $this->load->view('common/footer');
        }
    }
?>