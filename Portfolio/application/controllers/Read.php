<?php
    class Read extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('read_m'); // Load the model
        }

        function index(){
            $data['title'] = 'Read';
            $this->load->view('common/header', $data);
            $this->load->view('common/navbar');
            $this->load->view('read_v',$data);
            $this->load->view('common/footer');
        }

        function viewData_c(){
            $data["success"] = false;

            $data["data"] = $this->read_m->viewData_m();

            if(count($data["data"]) > 0){
                $data["success"] = true; // Set success to true if data is found
            }
            echo json_encode($data); // Return the data as JSON
        }

        function viewperStatus_c(){
            $data["success"] = false;

            $requeststatus = $this->input->post('txtnmRequeststatus'); // Get the request status from POST data

            $data["data"] = $this->read_m->viewperStatus_m($requeststatus);

            if(count($data["data"]) > 0){
                $data["success"] = true; // Set success to true if data is found
            }
            echo json_encode($data); // Return the data as JSON
        }

        function searchSomething_c(){
            $data["success"] = false;

            $search = $this->input->post('txtnmSearch'); // Get the search term from POST data

            if(empty($search)){
                $data["error"] = "Search term cannot be empty.";
                echo json_encode($data);
                return;
            }

            $data["data"] = $this->read_m->searchSomething_m($search);

            if(count($data["data"]) > 0){
                $data["success"] = true; // Set success to true if data is found
            }
            echo json_encode($data); // Return the data as JSON
        }

        function viewRequeststatus_c(){
            $data["success"] = false;

            $data["data"] = $this->read_m->viewRequeststatus_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data); // Return the data as JSON
        }
    }
    
?>