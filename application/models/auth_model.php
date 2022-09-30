<?php

class auth_model extends CI_Model{
    public function register()
    {
        $data = [
			"email" => $this->input->post('email', true),
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "password" => $this->input->post('password', true),
        ];
        $this->db->insert('candidates', $data);
    }

    public function cek($email, $password){
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get('candidates');
	}
}
?>