<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    }

    public function index(){

        //$this->load->view('login');

    }

    public function login(){

        $this->load->view('login');

    }

    public function login_validation(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            //Model functions
            $this->load->model('connect');
            if($this->connect->login_auth($username, $password))
            {
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url(). 'index.php/main/enter');
            }
            else
            {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(base_url(). 'index.php/main/login');
            }
        }
        else
        {
            $this->login();
        }

    }

    public function enter(){

        if($this->session->userdata('username') != '')
        {
            echo "IN";
        }
        else
        {
            redirect(base_url(). 'main/login');
        }

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
            $job = $this->input->post('job');
            $password = $this->input->post('password');
            $this->Reg_Model->register_user($name, $email, $mobile, $job, $password);
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

    public function show()
    {
        $this->load->view('Show');
        $this->show->get($num1);
    }

    public function send_param()
    {
        $data['param'] = "From Controller";
        $this->load->view('show',$data);
    }
}
?>