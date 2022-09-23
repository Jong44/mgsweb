<?php

class proses extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('upload');
		$this->load->helper('date');
	}

    public function saveForm()
    {
        $config['upload_path'] = './assets/img/candidates/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $gbr = $this->upload->data();
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $full_name = $first_name.' '.$last_name;
        $filename = $full_name.$gbr['file_ext'];
        $config['file_name'] = $filename;

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $first_name = $this->input->post('first_name');
                $last_name = $this->input->post('last_name');
                $full_name = $first_name.''.$last_name;
                $filename = $full_name.$gbr['file_ext'];
                $filenames = $gbr['file_name'];
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/candidates/'.$filenames;
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 1030;
                $config['height']= 520;
                $config['new_image']= './assets/img/candidates/'.$filenames;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
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
                $this->user_model->saveForm($id_job,$first_name,$last_name,$full_name,$category,$email,$nationality,$gender,$no_hp,$tgl_lahir,$expected_salary,$linked,$fb,$gambar);
                redirect('user/preview'.$full_name);
            } else {
                $this->session->set_flashdata('pesan', 'Failed Apply Jobs');
                redirect();
            }
     
        } else {
            $this->session->set_flashdata('pesan', 'Failed Apply Jobs');
			redirect();
        }

    }
}

?>