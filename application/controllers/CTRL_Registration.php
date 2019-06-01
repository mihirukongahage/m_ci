<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTRL_Registration extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    
    $this->load->database();
    $this->load->helper('url');
    
    $this->load->model('Reg_Model');
    }

    public function index(){

        redirect("CTRL_Registration/view_users");

    }

    public function view_users(){

        $this->load->model('Reg_Model');
        $data['userArray'] = $this->Reg_Model->return_users();
        $this->load->view('display_users',$data);
        //print_r( $data['userArray']);

    }

    
    public function register(){

        $this->load->view('registration');

        if($this->input->post('save'))
        {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $this->Reg_Model->register_user($name, $email, $mobile);
        }

    }

    public function deleteData()
    {
        $this->load->helper('url');
        $id=$this->input->get('id');
        $this->Reg_Model->deleteData($id);
        redirect("CTRL_Registration/view_users");
    }


    public function updateData()
    {
        $id=$this->input->get('id');
        $result['data']=$this->Reg_Model->displayById($id);
        $this->load->view('update_user',$result); 
        
        if($this->input->post('update'))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $mobile = $this->input->post('mobile');
                $this->Reg_Model->updateUser($name,$email,$mobile,$id);
                redirect("CTRL_Registration/view_users");
            }
    }
}
?>