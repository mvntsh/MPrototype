<?php
    class itemrequest extends CI_Controller {
        public function __construct() {
            parent::__construct();
            // Load any necessary models, libraries, or helpers here
            $this->load->helper("url");
            $this->load->library("form_validation");
        }

        public function index() {
            $data["title"] = "Request Item";
            $this->load->view('common/header', $data);
            $this->load->view('itemrequest_v');
            $this->load->view('common/footer');
        }
    }
?>