<?php
    class Signupform extends CI_Controller {
        public function index() {
            $data["title"] = "Sign Up";
            $this->load->view('common/header', $data);
            $this->load->view('signup_v');
            $this->load->view('common/footer');
        }
    }
?>