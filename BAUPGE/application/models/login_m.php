<?php
    class login_m extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function logIn_m($idno,$password){
            $query = $this->db->query("SELECT * FROM tblusers WHERE idno='$idno' AND password='$password'")->result_array();

            if(count($query)>0){
                return $query[0];
            }else{
                return false;
            }
        }
    }
?>