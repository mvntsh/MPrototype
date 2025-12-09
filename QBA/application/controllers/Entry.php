<?php
    class Entry extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model("entry_m");
            $this->load->helper("url");
            $this->load->library("form_validation");
        }

        public function index() {
            $data["title"] = "Create";
            $this->load->view('common/header',$data);
            $this->load->view('entry_v');
            $this->load->view('common/footer');
        }

        function existAccount_c(){
            $data["success"] = false;

            $accountno = $this->input->post("txtnmAccountno");

            $response = $this->entry_m->existAccount_m($accountno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function entry_c(){
            $data["success"] = false;

            $this->form_validation->set_rules("txtnmBankname", "Bank Name", "required");
            $this->form_validation->set_rules("txtnmAccountno", "Account No.", "required");
            $this->form_validation->set_rules("txtnmAccountname", "Account Name", "required");
            $this->form_validation->set_rules("txtnmBankaddress", "Bank Address", "required");
            $this->form_validation->set_rules("txtnmRegion", "Region Name", "required");
            $this->form_validation->set_rules("txtnmArea", "Area Name", "required");
            $this->form_validation->set_rules("txtnmZone", "Zone", "required");
            $this->form_validation->set_rules("txtnmBranchname", "Branch Name", "required");
            $this->form_validation->set_rules("txtnmBranchaddress", "Branch Address", "required");
            $this->form_validation->set_rules("txtnmSignatory", "Signatory", "required");
            $this->form_validation->set_rules("txtnmCurrency", "Currency", "required");
            $this->form_validation->set_rules("txtnmOnlineviewing", "Online Viewing", "required");
            $this->form_validation->set_rules("txtnmAccountstatus", "Account Status", "required");

            $values = array(
                "bank_name" => $this->input->post("txtnmBankname"),
                "account_no" => $this->input->post("txtnmAccountno"),
                "account_name" => $this->input->post("txtnmAccountname"),
                "bank_address" => $this->input->post("txtnmBankaddress"),
                "region_name" => $this->input->post("txtnmRegion"),
                "area_name" => $this->input->post("txtnmArea"),
                "branch_zone" => $this->input->post("txtnmZone"),
                "branch_name" => $this->input->post("txtnmBranchname"),
                "branch_address" => $this->input->post("txtnmBranchaddress"),
                "signatory" => $this->input->post("txtnmSignatory"),
                "currency" => $this->input->post("txtnmCurrency"),
                "online_viewing" => $this->input->post("txtnmOnlineviewing"),
                "online_banking" => $this->input->post("txtnmOnlineviewing"),
                "account_status" => $this->input->post("txtnmAccountstatus")
            );

            if ($this->form_validation->run() == TRUE) {
                $response = $this->entry_m->insertAccount_m($values);
                $data["success"] = true;
            } else {
                echo validation_errors();
                echo json_encode($data);
            }          
        }

        function viewAccount_c(){
            $data["success"] = false;

            $data["data"] = $this->entry_m->viewAccount_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchBranch_c(){
            $data["success"] = false;

            $search = $this->input->post("txtnmSearch");

            $data["data"] = $this->entry_m->searchBranch_m($search);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateOnlineviewing_c(){
            $data["success"] = false;

            $accountid = $this->input->post("txtnmAccountid");

            $values = array(
                "online_viewing" => $this->input->post("txtnmOnlineviewing")
            );

            $response = $this->entry_m->updateOnlineviewing_m($accountid,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateAccountstatus_c(){
            $data["success"] = false;

            $accountid = $this->input->post("txtnmAccountid");

            $values = array(
                "account_status" => $this->input->post("txtnmAccountstatus")
            );

            $response = $this->entry_m->updateAccountstatus_m($accountid,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateSignatory_c(){
            $data["success"] = false;

            $accountid = $this->input->post("txtnmAccountid");

            $values = array(
                "signatory" => $this->input->post("txtnmSignatoryusername")
            );

            $response = $this->entry_m->updateSignatory_m($accountid,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateOnlinebanking_c(){
            $data["success"] = false;

            $accountid = $this->input->post("txtnmAccountid");

            $values = array(
                "online_banking" => $this->input->post("txtnmOnlineviewing")
            );

            $response = $this->entry_m->updateOnlinebanking_m($accountid,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function downloadFile_c(){
            $data["success"] = false;

            $accountstatus = $this->input->post("txtnmSelectstatus");

            $data["data"] = $this->entry_m->downloadFile_m($accountstatus);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>