<?php
    class Create extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->model('create_m');
            $this->load->helper("url");
            $this->load->library("form_validation");
        }

        function index(){
            $this->load->view('common/header');
            $this->load->view('common/style');
            $this->load->view('create_v');
            $this->load->view('script/create_s');
            $this->load->view('common/footer');
        }

        function insert_c(){
            $data["success"] = false;

            $this->form_validation->set_rules("txtnmFirstname", "First Name", "required");
            $this->form_validation->set_rules("txtnmLastname", "Last Name", "required");
            $this->form_validation->set_rules("txtnmIdno", "ID No.", "required");
            $this->form_validation->set_rules("txtnmUsername", "Username", "required");
            $this->form_validation->set_rules("txtnmPassword", "Password", "required|min_length[8]");
            $this->form_validation->set_rules("txtnmConfirmPassword", "Confirm Password", "required|matches[txtnmPassword]");

            $data = array(
                'user_firstname' => $this->input->post('txtnmFirstname'),
                'user_lastname' => $this->input->post('txtnmLastname'),
                'user_idno' => $this->input->post('txtnmIdno'),
                'user_name' => $this->input->post('txtnmUsername'),
                'user_password' => password_hash($this->input->post('txtnmPassword'), PASSWORD_BCRYPT)
            );

            if ($this->form_validation->run() == TRUE) {
                $response = $this->create_m->insert_m($data);
                $data["success"] = true;
            } else {
                echo validation_errors();
                echo json_encode($data);
            } 
        }
    }
?>