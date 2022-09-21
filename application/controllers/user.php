<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('upload');
		$this->load->helper('date');
	}

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
		$data['career'] = $this->user_model->getCareer();
		$this->load->view('paartials/navbar');
		$this->load->view('career', $data);
		$this->load->view('paartials/footer');
	}

	public function apply($id_job)
	{
		$data['career'] = $this->user_model->getIdJob($id_job);
		$this->load->view('paartials/navbar');
		$this->load->view('apply', $data);
		$this->load->view('paartials/footer');
	}

	public function detail()
	{
		$this->load->view('paartials/navbar');
		$this->load->view('detail');
		$this->load->view('paartials/footer');
	}
}
