<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data["page_title"] = "CodeIgniter x Vue 3 x Tailwind CSS";
		$this->load->view('common/header', $data);
		$this->load->view("common/navbar");
		$this->load->view('index.php');
		$this->load->view("request_v");
		$this->load->view("cheqentry_v");
		$this->load->view("noncheqentry_v");
		$this->load->view('common/footer');
	}
}
