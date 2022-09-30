<?php

class user_model extends CI_Model{

    public function saveForm($id_job,$id_candidates,$first_name,$last_name,$full_name,$category,$email,$nationality,$gender,$no_hp,$tgl_lahir,$expected_salary,$linked,$fb,$gambar,$filePdf)
    {
        $datestring = '%Y-%m-%d';
        $yearstring = '%Y';
        $year = mdate($datestring);
        $date = mdate($datestring);
        $query = $this->db->query("update candidates set first_name='$first_name', last_name='$last_name', full_name='$full_name', id_job='$id_job', category='$category', email='$email', no_hp='$no_hp', nationality='$nationality', gender='$gender', tgl_lahir='$tgl_lahir', date_apply='$date', year_apply='$year' ,expected_salary='$expected_salary', fb='$fb', linked='$linked', img_profil='$gambar', status = 0, resume='$filePdf' where id_candidates = '$id_candidates'");
        return $query;
    }

    public function getId()
    {
        $this->db->select('*');
        $this->db->from('candidates');
        $this->db->where('status', '0');
        $this->db->order_by('id_job','desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    public function saveEdu($id_job,$id_user,$level,$exam,$year,$institute)
    {
        $query = $this->db->query("insert into edu (id_edu,id_job,id_user,level,exam,year,institute_name) values ('','$id_job','$id_user','$level','$exam','$year','$institute')");
        return $query;
    }

    public function saveEmp($id_job,$id_user,$company,$designation,$department,$start,$end,$respon)
    {
        $query = $this->db->query("insert into employe (id_employe,id_job,id_user,company_name,deisgnation,department,start,end,responsi) values ('','$id_job','$id_user','$company','$designation','$department','$start','$end','$respon')");
        return $query;
    }

    public function getCareer()
    {
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result_array();
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

    public function previewCandidates()
    {
        $this->db->select('*');
        $this->db->from('candidates');
        $this->db->where('status', '0');
        $this->db->order_by('id_job','desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function submitCandidates($id_candidates)
    {
        $query = $this->db->query("update candidates set status = 1 where id_candidates = '$id_candidates'");
        return $query;
    }

    

}

?>