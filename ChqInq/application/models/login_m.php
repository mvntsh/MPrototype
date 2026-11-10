<?php
    class login_m extends CI_Model
	{
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

		function loginaccount_m($username,$password){
			$query = $this->db->query("SELECT * FROM `tblusers` WHERE cis_uusername='$username' AND cis_upassword='$password'")->result_array();

			if(count($query)>0){
				return $query[0];
			}else{
				return array();
			}
		}
	}
?>