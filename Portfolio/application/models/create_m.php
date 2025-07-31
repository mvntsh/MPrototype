<?php
    class create_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }

        function requestExists_m($request_id){
            $query = $this->db->query("SELECT * FROM `tblrequest` WHERE request_id='$request_id'")->result_array();

            if($query){
                return true; // Request ID exists
            } else {
                return false; // Request ID does not exist
            }
        }

        function saveFile_m($values){
            $this->db->insert("tblrequest",$values);

            if($this->db->affected_rows() > 0){
                return true;
            } else {
                return false;
            }
        }
    }
?>