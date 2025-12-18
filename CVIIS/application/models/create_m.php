<?php
    class create_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }
        

        function insert_m($data){
            $this->db->insert("tblusers",$data);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>