<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function index()
	{
		$this->load->view('paartials/navbar');
		$this->load->view('homepage');
		$this->load->view('paartials/footer');

	}
	
	public function about()
	{
		$this->load->view('paartials/navbar');
		$this->load->view('about');
		$this->load->view('paartials/footer');
	}

	public function career()
	{
		$this->load->view('paartials/navbar');
		$this->load->view('career');
		$this->load->view('paartials/footer');
	}

	public function apply()
	{
		$this->load->view('paartials/navbar');
		$this->load->view('apply');
		$this->load->view('paartials/footer');
	}

	public function detail()
	{
		$this->load->view('paartials/navbar');
		$this->load->view('detail');
		$this->load->view('paartials/footer');
	}
}
