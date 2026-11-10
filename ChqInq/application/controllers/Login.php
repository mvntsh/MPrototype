<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('login_m');
        }

        public function index()
        {
            $data['title'] = 'Login';
            $this->load->view('common/header',$data);
            $this->load->view('login_v');
            $this->load->view('common/footer');
        }

        function loginaccount_c(){
			$data["success"] = false;

			$username = $this->input->post("txtnmUsername");
			$password = $this->input->post("txtnmPassword");

			$response = $this->login_m->loginaccount_m($username,$password);

			if(count($response)>0){
				$data["success"] = true;
				$this->session->set_userdata($response);
			}
			echo json_encode($data);
		}
    }
?>