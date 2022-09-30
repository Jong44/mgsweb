<?php

class proses extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('upload');
		$this->load->helper('date');
        $this->load->model('auth_model');
        if($this->session->userdata('id_candidates') == null){
			redirect('auth');
		}
	}

    public function saveForm()
    {
        $config['upload_path'] = './assets/img/candidates/';
        $config['allowed_types'] = 'jpg|jpeg|png|pdf|';
        $gbr = $this->upload->data();
        $username = $this->input->post('username');
        $filename = $username.$gbr['file_ext'];
        $config['file_name'] = $filename;

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']))
        {
            $this->upload->do_upload('filefoto');
            $gbr = $this->upload->data();
            $gambar = $gbr['file_name'];
     
        } 
        if (!empty($_FILES['filepdf'])){
            $this->upload->do_upload('filepdf');
            $pdf = $this->upload->data();
            $filePdf = $pdf['file_name'];
        }
        

            
        
        else {
            $this->session->set_flashdata('pesan', 'Failed Apply Jobs');
			redirect();
        }
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $full_name = $first_name.' '.$last_name;
        $id_job = $this->input->post('id_job');
        $first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
        $getCategory = $this->user_model->getCategory($id_job);
        $g = $getCategory->row_array();
        $category = $g['nama_job'];
		$email = $this->input->post('email');
		$nationality = $this->input->post('nationality');
		$gender = $this->input->post('gender');
		$no_hp = $this->input->post('no_hp');
		$tgl_lahir = $this->input->post('tgl_lahir');
	    $expected_salary = $this->input->post('expected_salary');
		$linked = $this->input->post('linked');
		$fb = $this->input->post('fb');
        $id_candidates = $this->input->post('id_candidates');
        $this->user_model->saveForm($id_job,$id_candidates,$first_name,$last_name,$full_name,$category,$email,$nationality,$gender,$no_hp,$tgl_lahir,$expected_salary,$linked,$fb,$gambar,$filePdf);
        redirect('user/preview/'.$id_job);   

    }

    public function submit()
    {
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $full_name = $first_name.' '.$last_name;
        $id_job = $this->input->post('id_job');
        $getCategory = $this->user_model->getCategory($id_job);
        $g = $getCategory->row_array();
        $category = $g['nama_job'];
        $id_candidates = $this->input->post('id_candidates');
        $this->user_model->submitCandidates($id_candidates);
        $this->user_model->notifAdd($full_name, $category);
        redirect('user/success');
    }
}

?>