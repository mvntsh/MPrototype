<?php
    class signup_m extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function saveUsers_m($values){
            $this->db->insert('tblusers', $values);

            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
    
?>