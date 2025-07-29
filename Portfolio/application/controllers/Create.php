<?php
    class Create extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('create_m');
        }

        public function index(){
            $data['title'] = 'Create';
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('create_v',$data);
            $this->load->view('common/footer');
        }

        function requestExists_c(){
            $exists = $this->create_m->requestExists_m($request_id = $this->input->post('txtnmRequestid'));
            if($exists){
                $data["success"] = false;
                $data["error"] = "Request ID already exists.";
            } else {
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function saveFile_c(){
            $data["success"] = false;

            // Validate form inputs
            $this->form_validation->set_rules('txtnmRequestid', 'Request ID', 'required');
            $this->form_validation->set_rules('txtnmAccountname', 'Account Name', 'required');
            $this->form_validation->set_rules('txtnmRequestdate', 'Request Date', 'required');
            $this->form_validation->set_rules('txtnmAmount', 'Amount', 'required');
            $this->form_validation->set_rules('txtnmTransactiontype', 'Transaction Type', 'required');
            $this->form_validation->set_rules('txtnmDescription', 'Description', 'required');
            $this->form_validation->set_rules('txtnmRegionrequest', 'Region Request', 'required');
            $this->form_validation->set_rules('txtnmRequeststatus', 'Request Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data["error"] = validation_errors();
                echo json_encode($data);
                return;
            }

            $values = array(
                'request_id' => $this->input->post('txtnmRequestid'),
                'accountname' => $this->input->post('txtnmAccountname'),
                'requestdate' => $this->input->post('txtnmRequestdate'),
                'amount' => $this->input->post('txtnmAmount'),
                'transactiontype' => $this->input->post('txtnmTransactiontype'),
                'description' => $this->input->post('txtnmDescription'),
                'regionrequest' => $this->input->post('txtnmRegionrequest'),
                'requeststatus' => $this->input->post('txtnmRequeststatus')
            );

            $response = $this->create_m->saveFile_m($values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
    
?>