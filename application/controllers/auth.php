<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('user_model');
		$this->load->library('upload');
		$this->load->helper('date');
        $this->load->model('auth_model');
    }

    public function form($id_job)
    {
        $data['career'] = $this->user_model->getIdJob($id_job);
        $this->load->view('paartials/navbar');
        $this->load->view('login.php', $data);
		$this->load->view('paartials/footer');
    }

    public function login()
    {
		$this->load->model('Auth_model');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
        $id_job = $this->input->post('id_job');

		$cek = $this->Auth_model->cek($email, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				foreach($cek->result() as $data){
					$sess_data['id_candidates'] = $data->id_candidates;
					$sess_data['email'] = $data->email;
                    $sess_data['first_name'] = $data->first_name;
					$sess_data['no_hp'] = $data->no_hp;
					$sess_data['linked'] = $data->linked;
					$sess_data['fb'] = $data->fb;
					$sess_data['last_name'] = $data->last_name;
					$sess_data['last_name'] = $data->last_name;
					$sess_data['last_name'] = $data->last_name;
					$sess_data['last_name'] = $data->last_name;
					$this->session->set_userdata($sess_data);
				}
			}
			redirect('user/apply/'.$id_job);
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('Auth');
		}
	}
    public function register()
    {
        $id_job = $this->input->post('id_job');
        $this->auth_model->register();
		redirect ('auth/form/'.$id_job);
    }
}
?>