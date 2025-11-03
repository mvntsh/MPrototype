<?php
    class Create_m extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function requestExist_m($request_no){
            $query = $this->db->query("SELECT * FROM `tblpayablerequest` WHERE request_no='$request_no'")->result_array();
            
            if($query){
                return true;
            } else {
                return false;
            }
        }

        function saveTable_m(){
            $data = array(
                'request_no' => $this->input->post('txtnmRequest_no'),
                'partner' => $this->input->post('txtnmPartner'),
                'request_date' => $this->input->post('txtnmRequest_date'),
                'transaction_type' => $this->input->post('txtnmTransactiontype'),
                'amount' => $this->input->post('txtnmAmount'),
                'rem_amount' => $this->input->post('txtnmAmount'),
                'request_description' => $this->input->post('txtnmDescription'),
                'request_status' => $this->input->post('txtnmStatus'),
                'request_remark' => $this->input->post('txtnmRemarks')
            );

            return $this->db->insert('tblpayablerequest', $data);
        }
    }
?>