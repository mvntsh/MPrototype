<?php
    class Update extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('update_m'); // Load the model
        }

        function index(){
            $data['title'] = 'Update';
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('update_v', $data);
            $this->load->view('common/footer');
        }

        function countRequest_c(){
            $data["success"] = false;

            $data["data"] = $this->update_m->countRequest_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewData_c(){
            $data["success"] = false;

            $data["data"] = $this->update_m->viewData_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function searchRequest_c(){
            $data["success"] = false;

            $searchTerm = $this->input->post("txtnmSearchTerm");

            $data["data"] = $this->update_m->searchRequest_m($searchTerm);

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>