<?php
    class Create extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('create_m');
            $this->load->library('form_validation');
        }

        function saveTable_c(){
            $data["success"] = false; 

            $this->form_validation->set_rules('txtnmRequest_no', 'Request No.', 'required');
            $this->form_validation->set_rules('txtnmPartner', 'Business Name', 'required');
            $this->form_validation->set_rules('txtnmRequest_date', 'Request Date', 'required');
            $this->form_validation->set_rules('txtnmTransactiontype', 'Transaction Type', 'required');
            $this->form_validation->set_rules('txtnmAmount', 'Amount', 'required|numeric');
            $this->form_validation->set_rules('txtnmDescription', 'Description', 'required');
            $this->form_validation->set_rules('txtnmStatus', 'Status', 'required');
            $this->form_validation->set_rules('txtnmRemarks', 'Remarks', 'required');

            if ($this->form_validation->run() == TRUE) {
                $result = $this->create_m->saveTable_m();
                if($result){
                    $data["success"] = true; 
                    echo json_encode($data);
                } else {
                    echo "Data Insertion Failed";
                }
            } else {
                echo validation_errors();
            }
        }
    }
?>