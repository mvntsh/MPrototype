<?php
    class insert_m extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function createTransaction_m($values){
            $this->db->insert("tblonlinetransaction",$values);

            if($this->db->affected_rows()>0){
                return true;    
            }else{
                return false;
            }
        }

        function showAccountnamebpi_m($search,$trxntype,$region){
            $query = $this->db->query("SELECT * FROM `tblonlinetransaction` WHERE account_name LIKE '$search%' AND transaction_type='$trxntype' AND  transaction_region='$region' ORDER BY account_name ASC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return false;
            }
        }
    }
?>