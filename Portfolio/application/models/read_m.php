<?php
    class read_m extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database(); // Load the database
        }

        // Function to get data from the database
        function viewData_m(){
            $query = $this->db->query("SELECT * FROM `tblrequest` ORDER BY request_id ASC;")->result_array(); // Replace 'your_table_name' with your actual table name
            
            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }
    }
    
?>