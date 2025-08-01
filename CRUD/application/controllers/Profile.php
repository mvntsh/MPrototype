<?php

    class Profile extends CI_Controller{
        public function __construct() {
            parent::__construct();
            //This is where you can load models, libraries, etc.
        }

        public function index(){
            $data['title'] = 'Profile';
            $this->load->view('profile_v',$data);
        }
    }
?>