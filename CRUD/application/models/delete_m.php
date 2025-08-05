<?php
    class delete_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }

        function viewRequest_m(){
            $query = $this->db->query("SELECT * FROM `tblrequest` WHERE requeststatus='Request' ORDER BY request_id DESC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function removeData_m($request_no){
            $this->db->where("request_no",$request_no);
            $this->db->delete("tblrequest");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>