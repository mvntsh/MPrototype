<?php
    class Inquiry_m extends CI_Model {

        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function viewReceived_m($search){
            $query = $this->db->query("SELECT *,CASE WHEN receivestatus = 'Unprocess' THEN '#7d6104' ELSE '#048c12' END AS colorStatus FROM `tblreceivedentry` WHERE payee LIKE '$search%' OR rfpno LIKE '$search%' OR description LIKE '%$search%' ORDER BY re_id DESC;")->result_array();

            if(count($query) > 0){
                return $query;
            }else{
                return array();
            }
        }

        function viewCheques_m($search){
            $query = $this->db->query("SELECT *,CASE WHEN status='Released' THEN '#8c4f04' WHEN status='Cancelled' THEN '#8c0404' WHEN status='Cleared' THEN '#128c04' ELSE '#595959' END statusColor FROM `tblcheckentry` WHERE payee LIKE '$search%' OR rfpno LIKE '$search%' OR checkno LIKE '$search%' ORDER BY ce_id DESC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function viewVouchers_m($search){
            $query = $this->db->query("SELECT *,CASE WHEN status='Released' THEN '#8c4f04' WHEN status='Cancelled' THEN '#8c0404' WHEN status='Cleared' THEN '#128c04' ELSE '#595959' END statusColor FROM `tblnoncheckentry` WHERE rfpno LIKE '$search%' OR voucherno LIKE '$search%' OR payee LIKE '$search%' ORDER BY noncheckentry_id DESC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }
?>