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
        // $this->db->where('name', $name);
        // $this->db->where('price', $price);
        // $this->db->where('description', $description);
        $query= $this->db->get('service');
        return $query;
    }

   
}
?>