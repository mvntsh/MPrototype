<?php
    class Loginform extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('login_m');
            $this->load->helper("url");
            $this->load->library("form_validation");
            $this->load->library("session");
        }

        function index() {
            $data["title"] = "Login";
            $this->load->view('common/header', $data);
            $this->load->view('login_v');
            $this->load->view('common/footer');
        }

        function loginValidation_c(){
            $this->form_validation->set_rules("nmIdno", "1", "required");
            $this->form_validation->set_rules("nmPassword", "2", "required");

            if ($this->form_validation->run() == TRUE) {
                $idno = $this->input->post("nmIdno");
                $password = $this->input->post("nmPassword");

                $response = $this->login_m->signIn_m($idno, $password);

                if($response) {
                    $data["success"] = true;
                    $data["user"] = $response;
                } else {
                    $data["success"] = false;
                }
            } else {
                $data["success"] = false;
            }
            echo json_encode($data);
        }

        function logIn_c(){
            $data["success"] = false;

            $idno = $this->input->post("nmIdno");
            $password = $this->input->post("nmPassword");

            $response = $this->login_m->signIn_m($idno,$password);

            if($response) {
                $data["success"] = true;
                $this->session->set_userdata($response);
            }

            echo json_encode($data);
        }
    }
?>