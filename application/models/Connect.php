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
        // $this->load->database();
        // $this->db->where('id', $id);
        // $q = $this->db->get('service');
        // return $q;


        $query = $this->db->query("SELECT * FROM service WHERE id=$id");

        $row = $query->row();

        return $row;

        /*if (isset($row))
        {
                echo $row->id;
                echo $row->name;
                echo $row->price;
        }*/
    }

   
}
?>