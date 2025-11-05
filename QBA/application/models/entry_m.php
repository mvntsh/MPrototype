<?php
    class Entry_m extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database(); // Load the database library
        }

        // Add model methods here as needed

        function insertAccount_m($values){
            $this->db->insert("tblaccounts",$values);

            if($this->db->affected_rows()>0){
                return true;
            } else {
                return false;
            }
        }

        function viewAccount_m(){
            $query = $this->db->query("SELECT *,CASE WHEN `online_viewing`='Yes' THEN '#f2df0c' ELSE '#732727' END as online_award FROM `tblaccounts` ORDER BY account_id DESC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function searchBranch_m($search){
            $query = $this->db->query("SELECT *,CASE WHEN `online_viewing`='Yes' THEN '#f2df0c' ELSE '#732727' END as online_award FROM `tblaccounts` WHERE `branch_name` LIKE '$search%' OR `signatory` LIKE '$search%'")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function updateOnlineviewing_m($accountid,$values){
            $this->db->where("account_id",$accountid);
            $this->db->update("tblaccounts",$values);

            if($this->db->affected_rows()>0){
                return true;
            } else {
                return false;
            }
        }

        function updateAccountstatus_m($accountid,$values){
            $this->db->where("account_id",$accountid);
            $this->db->update("tblaccounts",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function updateSignatory_m(){
            
        }
    }
?>