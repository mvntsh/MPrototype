<?php
    class delete_m extends CI_Model{
        function __construct(){
            $this->db->database();
        }

        function viewRequest_m(){
            $query = $this->db->query("SELECT * FROM `tblrequest` WHERE requeststatus='Request' ORDER BY request_id DESC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }
?>