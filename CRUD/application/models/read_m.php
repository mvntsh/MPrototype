<?php
    class read_m extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database(); // Load the database
        }

        // Function to get data from the database
        function viewData_m(){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '#026675' WHEN `requeststatus`='Received' THEN '#027504' ELSE 'red' END AS requestStatuscolor FROM `tblrequest` ORDER BY request_id ASC;")->result_array(); // Replace 'your_table_name' with your actual table name
            
            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }

        function viewperStatus_m($requeststatus){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '#026675' WHEN `requeststatus`='Received' THEN '#027504' ELSE 'red' END AS requestStatuscolor FROM `tblrequest` WHERE requeststatus = '$requeststatus' ORDER BY request_id ASC;")->result_array(); // Replace 'your_table_name' with your actual table name
            
            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }

        function searchSomething_m($search){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '#026675' WHEN `requeststatus`='Received' THEN '#027504' ELSE 'red' END AS requestStatuscolor FROM `tblrequest` WHERE request_id LIKE '%$search%' OR accountname LIKE '%$search%' ORDER BY request_id ASC;")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }

        function viewRequeststatus_m(){
            $query = $this->db->query("SELECT * FROM `tblrequest` GROUP BY requeststatus ORDER BY requeststatus ASC;")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }
    }
    
?>