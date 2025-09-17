<?php
    class Create_m extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function saveTable_m(){
            $data = array(
                'request_id' => $this->input->post('request_id'),
                'business_name' => $this->input->post('business_name'),
                'request_date' => $this->input->post('request_date'),
                'transaction_type' => $this->input->post('transaction_type'),
                'amount' => $this->input->post('amount'),
                'description' => $this->input->post('description')
            );

            return $this->db->insert('tblpayablerequest', $data);
        }
    }
?>