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
    }
?>