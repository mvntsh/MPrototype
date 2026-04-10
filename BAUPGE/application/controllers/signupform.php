<?php
    class Signupform extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('signup_m');
            $this->load->helper("url");
            $this->load->library("form_validation");
        }

        public function index() {
            $data["title"] = "Sign Up";
            $this->load->view('common/header', $data);
            $this->load->view('signup_v');
            $this->load->view('common/footer');
        }

        function validateUsers(){

            $this->form_validation->set_rules("nmFirstname", "1", "required");
            $this->form_validation->set_rules("nmLastname", "2", "required");
            $this->form_validation->set_rules("nmIdno", "3", "required");
            $this->form_validation->set_rules("nmPassword", "4", "required|min_length[25]");
            $this->form_validation->set_rules("nmConfirmPassword", "5", "required|matches[nmPassword]");
            $this->form_validation->set_rules("nmStatus", "6", "required");


            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }

        function saveUsers_c(){
            $data["success"] = false;

            $values = array(
                "firstname" => $this->input->post("nmFirstname"),
                "lastname" => $this->input->post("nmLastname"),
                "idno" => $this->input->post("nmIdno"),
                "password" => $this->input->post("nmPassword"),
                "user_status" => $this->input->post("nmStatus")
            );

            $response = $this->signup_m->saveUsers_m($values);

            if($response) {
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>