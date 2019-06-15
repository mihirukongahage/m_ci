<?php
class Connect extends CI_Model{

    /*

    Authenticate user login

    */
    function login_auth($username, $password)
    {
        $this->load->database();
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        // Get from user_log table
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

    /*

    Get service to the dashboard

    */
    function get_service()
    {
        $this->load->database();
        // Services table 
        $query= $this->db->get('service');
        return $query;
    }

    /*

    Remove service

    */
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

    function update_service($servicename, $price, $description, $id)
    {
        $data = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'description' => $description
         );
        $this->db->where('id',$id);
        $this->db->update('service',$data);

    }

    function get_by_id($id)
    {
        $query=$this->db->query("SELECT * FROM service WHERE id=$id");
        $row = $query->row();
        return $row;
    }

    /*

    Create new service

    */
    function add_service($data)
    {
        $this->load->database();
        // service table
        $this->db->insert('service',$data);
        
    }

   
}
?>