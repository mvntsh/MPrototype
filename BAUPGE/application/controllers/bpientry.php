<?php
    class bpientry extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model("insert_m");
            $this->load->helper("url");
            $this->load->library("session");
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
            $this->form_validation->set_rules("nmDate", "Date", "required");


            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }

        function insert_inhousevalidation_c(){
            $this->form_validation->set_rules("nmRfpno", "Request number", "required");
            $this->form_validation->set_rules("nmAmount", "Amount", "required");
            $this->form_validation->set_rules("nmVoucherNo", "Voucher number", "required");
            $this->form_validation->set_rules("nmBatchno", "Batch number", "required");

            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }

        function insert_bpi_c(){
            $data["success"] = false;


            $values = array(
                "bank_origin" => $this->input->post("nmOrigin"),
                "account_type" => $this->input->post("nmAccountType"),
                "account_name" => $this->input->post("nmAccountname"),
                "account_no" => $this->input->post("nmAccountno"),
                "request_no" => $this->input->post("nmRequestno"),
                "voucher_no" => $this->input->post("nmVoucherNo"),
                "voucher_date" => $this->input->post("nmDate"),
                "transaction_type" => $this->input->post("nmTransactionType"),
                "online_amount" => $this->input->post("nmAmount"),
                "transaction_status" => $this->input->post("nmTransactionStatus"),
                "batch_no" => $this->input->post("nmBatchno"),
                "transaction_region" => $this->input->post("nmRegion"),
                "user_id" => $this->input->post("nmUser_id")
            );

            $response = $this->insert_m->createTransaction_m($values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function showAccountnamebpi_c(){
            $data["success"] = false;

            $search = $this->input->post("nmAccountname");
            $trxntype = $this->input->post("nmTransactionType");
            $region = $this->input->post("nmRegion");

            $data["data"] = $this->insert_m->showAccountnamebpi_m($search,$trxntype,$region);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>