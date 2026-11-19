<?php
    class processing_m extends CI_Model
	{
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

		function insert_m($data){
			$this->db->insert("tblvouchers",$data);

			if($this->db->affected_rows()>0){
                return true;
			}else{
				return false;
			}
		}

        function view_m(){
            $query = $this->db->query("SELECT * FROM `tblvouchers`ORDER BY voucher_id DESC")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return false;
            }
        }

        function search_m($search){
            $query = $this->db->query("SELECT * FROM `tblvouchers`WHERE checkno='$search';")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function verifyAmount_m($checkno){
            $query = $this->db->query("SELECT * FROM `tblvouchers`WHERE payable_amount LIKE '%.00%' AND checkno='$checkno'")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
        }

        function dateFormat_m($voucherdate,$checkdate){
            $query = $this->db->query("SELECT DATE_FORMAT('$voucherdate','%M %d, %Y') AS spellVoucherdate,DATE_FORMAT('$checkdate','%m/%d/%Y') AS spellCheckdate,DATE_FORMAT('$checkdate','%m%d%Y') AS spellCheckdatep;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function dateStaled_m($checkdate){
            $query = $this->db->query("SELECT DATE_ADD('$checkdate', INTERVAL 6 MONTH) as getStaled")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
	}
?>