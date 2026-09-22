<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Receive extends CI_Controller{


        function __construct() {
            parent::__construct();
            
        }

        function index(){
            $data["title"] = "Receive";
            $this->load->view('common/header', $data);
            $this->load->view('receive_v');
            $this->load->view('common/footer');
        }
    }
?>