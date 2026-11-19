<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class processing extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('processing_m');
            $this->load->helper("url");
            $this->load->library("session");
            $this->load->library("form_validation");
        }

        public function index(){
            $data['title'] = 'Processing';
            $this->load->view('common/header',$data);
            $this->load->view('processing_v');
            $this->load->view('assets/processing_s');
            $this->load->view('common/restval');
            $this->load->view('common/footer');
        }

        function validation_entry_c(){
            $this->form_validation->set_rules("txtVouchertype", "Voucher Type", "required");
            $this->form_validation->set_rules("txtRfpno", "RFP No.", "required");
            $this->form_validation->set_rules("txtPayee", "Payee", "required");
            $this->form_validation->set_rules("txtCostCenter", "Cost Center", "required");
            $this->form_validation->set_rules("txtRequestAmount", "Request Amount", "required");
            $this->form_validation->set_rules("txtVoucherDate", "Voucher Date", "required");
            $this->form_validation->set_rules("txtCheckDate", "Check Date", "required");
            $this->form_validation->set_rules("txtAmount", "Amount", "required");
            $this->form_validation->set_rules("txtDescription", "Description", "required");


            if ($this->form_validation->run() == TRUE) {
                $data["success"] = true;
            }else{
                $data["success"] = false;
            }
            echo json_encode($data); 
        }

        function insert_c(){
            $data["success"] = false;

            $data = array(
                "account_no" => $this->input->post("txtAccountno"),
                "voucher_type" => $this->input->post("txtVouchertype"),
                "rfpno" => $this->input->post("txtRfpno"),
                "payee" => $this->input->post("txtPayee"),
                "cost_center" => $this->input->post("txtCostCenter"),
                "req_amount" => $this->input->post("txtRequestAmount"),
                "voucher_date" => $this->input->post("txtVoucherDate"),
                "checkno" => $this->input->post("txtCheckNo"),
                "check_date" => $this->input->post("txtCheckDate"),
                "staled" => $this->input->post("txtDatestaled"),
                "samount" => $this->input->post("txtSamount"),
                "vat" => $this->input->post("txtVAT"),
                "wtax" => $this->input->post("txtWtax"),
                "payable_amount" => $this->input->post("txtAmount"),
                "description" => $this->input->post("txtDescription"),
                "status" => $this->input->post("txtStatus")
            );

            $response = $this->processing_m->insert_m($data);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function view_c(){
            $data["success"] = false;

            $data["data"] = $this->processing_m->view_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function search_c(){
            $data["success"] = false;

            $search = $this->input->post("txtSearch");

            $data["data"] = $this->processing_m->search_m($search);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function verifyAmount_c(){
			$data["success"] = false;

			$checkno = $this->input->post("txtSearch");

			$data["data"] = $this->processing_m->verifyAmount_m($checkno);

			if(count($data["data"])>0){
				$data["success"] = true;
			}

			echo json_encode($data);
		}

        function dateFormat_c(){
            $data["success"] = false;

            $voucherdate = $this->input->post("txtVoucherDate");
            $checkdate = $this->input->post("txtCheckDate");

            $data["data"] = $this->processing_m->dateFormat_m($voucherdate,$checkdate);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function dateStaled_c(){
            $data["success"] = false;

            $checkdate = $this->input->post("txtCheckDate");

            $data["data"] = $this->processing_m->dateStaled_m($checkdate);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>