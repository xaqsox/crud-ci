<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
	}

	public function index()
	{
		$data["title"] = "Homepage";
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		//load view index.php pada folder views/mahasiswa
		$this->load->view('templates/home');
		$this->load->view('templates/footer');
	}
}
