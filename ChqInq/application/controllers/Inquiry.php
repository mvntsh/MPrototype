<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Inquiry extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('inquiry_m');
        }

        public function index()
        {
            $data['title'] = 'Inquiry';
            $this->load->view('common/header',$data);
            $this->load->view('inquiry_v');
            $this->load->view('common/footer');
        }

        function viewReceived_c(){
            $data["success"] = false;

            $search = $this->input->post("txtnmSearch");

            $data["data"] = $this->inquiry_m->viewReceived_m($search);

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewCheques_c(){
            $data["success"] = false;

            $search = $this->input->post("txtnmSearch");

            $data["data"] = $this->inquiry_m->viewCheques_m($search);

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewVouchers_c(){
            $data["success"] = false;

            $search = $this->input->post("txtnmSearch");

            $data["data"] = $this->inquiry_m->viewVouchers_m($search);

            if(count($data["data"]) > 0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>