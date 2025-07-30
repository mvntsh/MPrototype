<?php
    class update_m extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database(); // Load the database
        }

        function countRequest_m(){
            $query = $this->db->query("SELECT COUNT(*) as countRequest FROM `tblrequest` WHERE requeststatus='Request'")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }

        function viewData_m(){
            $query = $this->db->query("SELECT * FROM `tblrequest` ORDER BY request_id DESC;")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }
    }
    
?>