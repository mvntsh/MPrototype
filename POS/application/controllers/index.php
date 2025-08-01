<?php
    class index extends CI_Controller{
        function __construct(){
            parent::__construct();
            
        }

        function index(){
            $data["title"] = "BELGIAN POS";
            $this->load->view('index_v',$data);
        }
    }
    
?>