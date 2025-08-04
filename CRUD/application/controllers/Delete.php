<?php
    class Delete extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model("delete_m");
        }

        function index(){
            $data["title"] = "Delete";
            $this->load->view("common/header",$data);
            $this->load->view("common/navbar");
            $this->load->view("delete_v");
            $this->load->view("common/footer");
        }

        function viewRequest_c(){
            $data["success"] = false;

            $data["data"] = $this->delete_m->viewRequest_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
    
?>