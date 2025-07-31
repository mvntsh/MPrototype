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

        function requestStatus_c(){
            $data["success"] = false;

            $data["data"] = $this->update_m->requestStatus_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewRequest_c(){
            $data["success"] = false;

            $data["data"] = $this->update_m->viewRequest_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewReceived_c(){
            $data["success"] = false;

            $data["data"] = $this->update_m->viewReceived_m();

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateRequestdata_c(){
            $data["success"] = false;

            $requestno = $this->input->post("txtnmRequestno");
            $values = array(
                "accountname" => $this->input->post("txtnmAccountname"),
                "amount" => $this->input->post("txtnmAmount"),
                "description" => $this->input->post("txtnmDescription")
            );

            $response = $this->update_m->updateRequestdata_m($requestno, $values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function requestProcess_c(){
            $data["success"] = false;

            $requestno = $this->input->post("txtnmRequestno");

            $values = array(
                "requeststatus" => "Received"
            );

            $response = $this->update_m->requestProcess_m($requestno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>