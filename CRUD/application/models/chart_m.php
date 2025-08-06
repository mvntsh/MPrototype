<?php
    class chart_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }

        function viewChart_m(){
            $query = $this->db->query("SELECT (SELECT COUNT(*) FROM `tblrequest` WHERE requeststatus='Request') as requestCount,(SELECT COUNT(*) FROM `tblrequest` WHERE requeststatus='Received') as receivedCount FROM `tblrequest`")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }


        function generateChart_m($from,$to){
            $query = $this->db->query("SELECT (SELECT COUNT(*) FROM `tblrequest` WHERE requestdate BETWEEN '$from' AND '$to' AND requeststatus='Request') as requestCount,(SELECT COUNT(*) FROM `tblrequest` WHERE requestdate BETWEEN '$from' AND '$to' AND requeststatus='Received') as receivedCount FROM `tblrequest` GROUP BY requeststatus")->result_array();
        
            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }
?>