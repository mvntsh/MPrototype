<?php
    class read_m extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function showData_m($search){
            $query = $this->db->query("SELECT * FROM `tblonlinetransaction` WHERE request_no LIKE '$search%' OR account_name LIKE '$search%' OR description LIKE '%$search%' ORDER BY transaction_id DESC;")->result_array();

            if(count($query) > 0){
                return $query;
            }else{
                return false;
            }
        }

        function viewdataArchive_m(){
            $query = $this->db->query("SELECT request_no,account_name,account_no,voucher_date,online_amount,description,transaction_status, IF(`bank_origin`='BPI', online_amount, '') AS tobpi,IF(`bank_origin`='Others', online_amount, '') AS toothers FROM `tblonlinetransaction` LIMIT 150;")->result_array();

            if(count($query) > 0){
                return $query;
            } else {
                return array();
            }
        }

        function searchdataArchive_m($search){
            $query = $this->db->query("SELECT request_no,account_name,account_no,voucher_date,online_amount,description,transaction_status, IF(`bank_origin`='BPI', online_amount, '') AS tobpi,IF(`bank_origin`='Others', online_amount, '') AS toothers FROM `tblonlinetransaction` WHERE request_no LIKE '$search%' OR account_name LIKE '$search%' OR firstname LIKE '$search%' OR lastname LIKE '$search%' OR account_no LIKE '$search%';")->result_array();

            if(count($query) > 0){
                return $query;
            } else {
                return array();
            }
        }

        function viewRequests_m(){
            $query = $this->db->query("SELECT *,IF(cost_center LIKE '%Luzon' OR request_id LIKE 'L%', '#7dc9f5', IF(cost_center LIKE '%VisMin' OR request_id LIKE 'V%', '#f75e84', '#a37512')) AS regionColor,IF(receiving_status='Processed', '#0c2ff2', IF(receiving_status='Validated', '#14f20c', '#a37512')) AS statusColor FROM `tbldemand` ORDER BY received_id DESC LIMIT 150;")->result_array();

            if(count($query) > 0){
                return $query;
            }else{
                return false;
            }
        }

        function searchRequests_m($search){
            $query = $this->db->query("SELECT *,IF(cost_center LIKE '%Luzon' OR request_id LIKE 'L%', '#054e75', IF(cost_center LIKE '%VisMin' OR request_id LIKE 'V%', '#b31d83', '#a37512')) AS regionColor,IF(receiving_status='Processed', '#0c2ff2', IF(receiving_status='Validated', '#14f20c', '#a37512')) AS statusColor FROM `tbldemand` WHERE request_id LIKE '$search%' OR payee LIKE '$search%' OR cost_center LIKE '$search%' ORDER BY received_id DESC;")->result_array();

            if(count($query) > 0){
                return $query;
            }else{
                return array();
            }
        }

        function viewCostcenter_m(){
            $query = $this->db->query("SELECT * FROM `tbldemand` GROUP BY cost_center ORDER BY cost_center ASC;")->result_array();

            if(count($query) > 0){
                return $query;
            }else{
                return array();
            }
        }

        function searchRequestor_m($search){
            $query = $this->db->query("SELECT * FROM `tbldemand` WHERE account_no='$search'")->result_array();
            
            if(count($query) > 0){
                return $query;
            }else{
                return array();
            }
        }

        function viewTransactiontype_m(){
            $query = $this->db->query("SELECT * FROM `tbldemand` GROUP BY transaction_type ORDER BY transaction_type ASC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }
?>