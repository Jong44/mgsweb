<?php

class user_model extends CI_Model{

    public function saveForm($id_job,$first_name,$last_name,$full_name,$category,$email,$nationality,$gender,$no_hp,$tgl_lahir,$expected_salary,$linked,$fb,$gambar)
    {
        $datestring = '%Y-%m-%d';
        $date = mdate($datestring);
        $query = $this->db->query("insert into candidates (id_candidates,first_name,last_name,full_name,id_job,category,email,no_hp,nationality,gender,tgl_lahir,date_apply,expected_salary,fb,linked,img_profil,status) values ('','$first_name','$last_name','$full_name','$id_job','$category','$email','$no_hp','$nationality','$gender','$tgl_lahir','$date','$expected_salary','$linked','$fb','$gambar','0')");
        return $query;
    }

    public function getCareer()
    {
        return $this->db->get('job')->result_array();
    }

    public function getIdJob($id_job)
    {
        return $this->db->get_where('job',['id_job' => $id_job])->row_array();
    }

    public function getCategory($id_job)
    {
        $query = $this->db->query("select * from job where id_job = '$id_job'");
        return $query;
        
    }

    public function notifAdd($full_name, $category)
    {
        $datestring = '%Y-%m-%d';
        $date = mdate($datestring);
        $query = $this->db->query("insert into notification (id_notif, category, date, name, content) values ('','$category','$date','$full_name','You’ve got for new application for $category Wanted')");
        return $query;
    }

    public function getCandidates($full_name)
    {
        return $this->db->get_where('candidates',['full_name' => $full_name])->row_array();
    }

    

}

?>