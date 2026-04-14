<?php
    class Dashboard extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper("url");
        }

        public function index() {
            $data["title"] = "Dashboard";
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('dashboard_v');
            $this->load->view('common/footer');
        }
    }
?>