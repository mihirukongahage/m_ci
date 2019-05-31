<?php
class Reg_Model extends CI_Model{

    function register_user(){
        $this->load->database();
        $users = $this->db->query("SELECT * FROM users");
        return $users->result_array();
        echo "connet";
    }

    function return_users(){
        $this->load->database();
        //$users = $this->db->query("SELECT * FROM users");
        $users = $this->db->get('users');
        $users->result_array();
        return $users->result_array();
    }
}
?>