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

        function validate_idno_m($idno){
            $this->db->where("user_idno",$idno);
            $query = $this->db->get("tblusers");

            if($query->num_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>