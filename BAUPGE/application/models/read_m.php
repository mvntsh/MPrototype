<?php
    class read_m extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function showData_m($search){
            $query = $this->db->query("SELECT * FROM `tblonlinetransaction` WHERE request_no LIKE '$search%' OR account_name LIKE '$search%' OR description LIKE '%$search%' ORDER BY transaction_id DESC;")->result_array();

            if(count($query) > 0){
                return $query;
            }else{
                return false;
            }
        }
    }
?>