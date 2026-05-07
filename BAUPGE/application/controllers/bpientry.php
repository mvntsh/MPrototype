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
        
        function insert_bankvalidation_c(){

            $this->form_validation->set_rules("nmAccountname", "Account Name", "required");
            $this->form_validation->set_rules("nmAccountno", "Account No", "required");


            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }

        function insert_inhousevalidation_c(){
            $this->form_validation->set_rules("nmRfpno", "Request number", "required");
            $this->form_validation->set_rules("nmAmount", "Inhouse Contact", "required");
            $this->form_validation->set_rules("nmVoucherNo", "Inhouse Email", "required");
            $this->form_validation->set_rules("nmDate", "Inhouse Email", "required");
            $this->form_validation->set_rules("nmBatchno", "Inhouse Email", "required");

            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }
    }
?>