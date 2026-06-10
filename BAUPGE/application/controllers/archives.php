<?php
    class archives extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model("read_m");
            $this->load->helper("url");
            $this->load->library("session");
        }

        public function index() {
            $data["title"] = "Data Archive";
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('archives_v');
            $this->load->view('common/footer');
        }

        function viewdataArchive_c(){
            $data["success"] = false;

            $data["data"] = $this->read_m->viewdataArchive_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchdataArchive_c(){
            $data["success"] = false;

            $search = $this->input->post("txtnmSearch");

            $data["data"] = $this->read_m->searchdataArchive_m($search);

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>