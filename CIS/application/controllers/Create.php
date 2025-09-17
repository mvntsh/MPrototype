<?php
    class Create_c extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('create_m');
            $this->load->library('form_validation');
        }

        function saveTable_c(){
            $data["success"] = false; 
            
            $this->form_validation->set_rules('request_id', 'Request ID', 'required');
            $this->form_validation->set_rules('business_name', 'Business Name', 'required');
            $this->form_validation->set_rules('request_date', 'Request Date', 'required');
            $this->form_validation->set_rules('transaction_type', 'Transaction Type', 'required');
            $this->form_validation->set_rules('amount', 'Amount', 'required|numeric');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == TRUE) {
                $result = $this->create_m->saveTable_m();
                if($result){
                    echo "Data Inserted Successfully";
                } else {
                    echo "Data Insertion Failed";
                }
            } else {
                echo validation_errors();
            }
        }
    }
?>