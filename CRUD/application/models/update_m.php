<?php
    class update_m extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database(); // Load the database
        }

        function countRequest_m(){
            $query = $this->db->query("SELECT COUNT(*) as countRequest FROM `tblrequest` WHERE requeststatus='Request'")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }

        function viewData_m(){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '' WHEN `requeststatus`='Received' THEN 'disabled' ELSE 'red' END AS activeButton,CASE WHEN `requeststatus`='Request' THEN 'orange' WHEN `requeststatus`='Received' THEN 'green' ELSE 'red' END AS requestColor FROM `tblrequest` ORDER BY request_id DESC;")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return false; // Return false if no records found
            }
        }

        function searchRequest_m($searchTerm){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '' WHEN `requeststatus`='Received' THEN 'disabled' ELSE 'red' END AS activeButton,CASE WHEN `requeststatus`='Request' THEN 'orange' WHEN `requeststatus`='Received' THEN 'green' ELSE 'red' END AS requestColor FROM `tblrequest` WHERE request_id LIKE '%$searchTerm%' OR accountname LIKE '%$searchTerm%' ORDER BY request_id DESC;")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return array(); // Return false if no records found
            }
        }

        function requestStatus_m(){
            $query = $this->db->query("SELECT *,COUNT(*) as countEntries,CASE WHEN `requeststatus`='Request' THEN 'orange' WHEN `requeststatus`='Received' THEN 'green' ELSE 'red' END AS requestColor FROM `tblrequest` GROUP BY requeststatus ORDER BY requeststatus DESC;")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return array(); // Return false if no records found
            }
        }

        function viewRequest_m(){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '' WHEN `requeststatus`='Received' THEN 'disabled' ELSE 'red' END AS activeButton,CASE WHEN `requeststatus`='Request' THEN 'orange' WHEN `requeststatus`='Received' THEN 'green' ELSE 'red' END AS requestColor FROM `tblrequest` WHERE requeststatus='Request'")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return array(); // Return false if no records found
            }
        }

        function viewReceived_m(){
            $query = $this->db->query("SELECT *,CASE WHEN `requeststatus`='Request' THEN '' WHEN `requeststatus`='Received' THEN 'disabled' ELSE 'red' END AS activeButton,CASE WHEN `requeststatus`='Request' THEN 'orange' WHEN `requeststatus`='Received' THEN 'green' ELSE 'red' END AS requestColor FROM `tblrequest` WHERE requeststatus='Received'")->result_array();

            if(count($query) > 0){
                return $query; // Return the result set if there are records
            } else {
                return array(); // Return false if no records found
            }
        }

        function updateRequestdata_m($requestno,$values){
            $this->db->where("request_no",$requestno);
            $this->db->update("tblrequest",$values);

            if($this->db->affected_rows() > 0){
                return true; // Return true if the update was successful
            } else {
                return false; // Return false if no rows were affected
            }
        }

        function requestProcess_m($requestno,$values){
            $this->db->where("request_no",$requestno);
            $this->db->update("tblrequest",$values);
            
            if($this->db->affected_rows() > 0){
                return true; // Return true if the process was successful
            } else {
                return false; // Return false if no rows were affected
            }
        }
    }
    
?>