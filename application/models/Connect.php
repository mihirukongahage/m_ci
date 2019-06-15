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

    /*

    Pass field data to the edit_service view

    */
    function ed_service($id)
    {
        $query = $this->db->query("SELECT * FROM service WHERE id=$id");
        $row = $query->row();
        return $row;
    }
    /*

    Update service

    */
    function update_service($servicename, $price, $description, $id)
    {
        $data = array(
            'id' => $id,
            'name' => $servicename,
            'price' => $price,
            'description' => $description
         );
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('service',$data);

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