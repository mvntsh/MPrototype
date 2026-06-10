<?php
    class receivingentry extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model("insert_m");
            $this->load->model("read_m");
            $this->load->helper("url");
            $this->load->library("session");
            $this->load->library("form_validation");
        }

        public function index() {
            $data["title"] = "Receiving Entry";
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('receivingentry_v');
            $this->load->view('common/footer');
        }

        function insert_bankvalidation_c(){

            $this->form_validation->set_rules("nmRequest_id", "Account Name", "required");
            $this->form_validation->set_rules("nmPayee", "Account No", "required");
            $this->form_validation->set_rules("nmAccount_no", "Date", "required");
            $this->form_validation->set_rules("nmCost_center", "Cost Center", "required");
            $this->form_validation->set_rules("nmDate_received", "Date Received", "required");
            $this->form_validation->set_rules("nmTransaction_type", "Transaction Type", "required");
            $this->form_validation->set_rules("nmPayable_amount", "Payable Amount", "required");
            $this->form_validation->set_rules("nmReceiving_description", "Description", "required");


            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }

        function receivedRequest_c(){
            $data["success"] = false;

            $values = array(
                "request_id" => $this->input->post("nmRequest_id"),
                "payee" => $this->input->post("nmPayee"),
                "account_no" => $this->input->post("nmAccount_no"),
                "cost_center" => $this->input->post("nmCost_center"),
                "date_received" => $this->input->post("nmDate_received"),
                "transaction_type" => $this->input->post("nmTransaction_type"),
                "payable_amount" => $this->input->post("nmPayable_amount"),
                "receiving_description" => $this->input->post("nmReceiving_description"),
                "receiving_status" => $this->input->post("nmReceiving_status")
            );

            $response = $this->insert_m->receivedRequest_m($values);

            if($response) {
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewRequests_c(){
            $data["success"] = false;

            $data["data"] = $this->read_m->viewRequests_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchRequests_c(){
            $data["success"] = false;

            $search = $this->input->post("nmSearch");

            $data["data"] = $this->read_m->searchRequests_m($search);

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewCostcenter_c(){
            $data["success"] = false;

            $data["data"] = $this->read_m->viewCostcenter_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchRequestor_c(){
            $data["success"] = false;

            $search = $this->input->post("nmAccount_no");

            $data["data"] = $this->read_m->searchRequestor_m($search);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewTransactiontype_c(){
            $data["success"] = false;

            $data["data"] = $this->read_m->viewTransactiontype_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>