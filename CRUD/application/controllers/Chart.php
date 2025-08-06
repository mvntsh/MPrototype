<?php
    class Chart extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model("chart_m");
        }


        function index(){
            $data["title"] = "Request Counter";

            $this->load->view("common/header",$data);
            $this->load->view("common/navbar");
            $this->load->view("chart_v");
            $this->load->view("common/footer");
        }

        function viewChart_c(){
            $data["success"] = false;

            $data["data"] = $this->chart_m->viewChart_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function generateChart_c(){
            $data["success"] = false;

            $from = $this->input->post("txtnmFrom");
            $to = $this->input->post("txtnmTo");

            $data["data"] = $this->chart_m->generateChart_m($from,$to);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
    
?>