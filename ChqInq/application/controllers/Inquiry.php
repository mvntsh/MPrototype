<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Inquiry extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Inquiry';
            $this->load->view('common/header',$data);
            $this->load->view('inquiry_v');
            $this->load->view('common/footer');
        }
    }
?>