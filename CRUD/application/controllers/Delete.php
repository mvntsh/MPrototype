<?php
    class Delete extends CI_Controller{
        function __construct(){
            parent::__construct();
            //Database here.
        }

        function index(){
            $data["title"] = "Delete";
            $this->load->view("common/header",$data);
            $this->load->view("common/navbar");
            $this->load->view("delete_v");
            $this->load->view("common/footer");
        }
    }
    
?>