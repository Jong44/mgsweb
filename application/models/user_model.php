<?php

class User_model extends CI_Model{

    public function saveForm()
    {
        
    }

    public function getCareer()
    {
        return $this->db->get('job')->result_array();
    }

    public function getIdJob($id_job)
    {
        return $this->db->get_where('job',['id_job' => $id_job])->row_array();
    }

    public function getIdJobs()
    {
        
    }

    

}

?>