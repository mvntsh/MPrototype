<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Request extends CI_Controller{


        function __construct() {
            parent::__construct();
            
        }

        function index(){
            $data["title"] = "Requests";
            $this->load->view('common/header', $data);
            $this->load->view('request_v');
            $this->load->view('common/footer');
        }
    }
?>