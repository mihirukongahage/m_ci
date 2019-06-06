<?php
class Reg_Model extends CI_Model{

    function register_user($name, $email, $mobile)
    {
        $this->load->database();
        //$this->db->insert("users", $name, $email, $mobile);
        $query="insert into users values('','$name','$email','$mobile', '$job', '$password')";
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

    function displayById($id)
    {
        $query=$this->db->query("select * from users where id='".$id."'");
        return $query->result();
    }
    
    function updateUser($name,$email,$mobile,$id)
    {
        $query=$this->db->query("update users SET name='$name',email='$email',mobile='$mobile' where id='".$id."'");
    } 
}
?>