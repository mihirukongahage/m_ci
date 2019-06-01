<?php
class Reg_Model extends CI_Model{

    function register_user($name, $email, $mobile)
    {
        $this->load->database();
        //$this->db->insert("users", $name, $email, $mobile);
        $query="insert into users values('','$name','$email','$mobile')";
        $this->db->query($query);
    }

    function return_users()
    {
        $this->load->database();
        //$users = $this->db->query("SELECT * FROM users");
        $users = $this->db->get('users');
        $users->result_array();
        return $users->result_array();
    }

    function deleteData($id)
    {
        $this->db->query("delete  from users where id='".$id."'");
    } 
}
?>