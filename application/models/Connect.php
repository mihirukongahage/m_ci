<?php
class Connect extends CI_Model{

    function login_auth($username, $password)
    {
        $this->load->database();
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query= $this->db->get('users_log');
        $this->db->query($query);

        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function get_service()
    {
        $this->load->database();
        $query= $this->db->get('service');
        return $query;
    }

    function rem_service($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('service');
        return true;
    }

    function ed_service($id)
    {
        $query = $this->db->query("SELECT * FROM service WHERE id=$id");
        $row = $query->row();
        return $row;
    }

    function update_service($id)
    {
        $this->db->where("id",$id);
        $query = $this->db->get("service");
        return $query->results();
    }

    function get_by_id($id)
    {
        $query=$this->db->query("SELECT * FROM service WHERE id=$id");
        $row = $query->row();
        return $row;
    }

   
}
?>