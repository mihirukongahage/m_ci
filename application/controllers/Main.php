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
    /*

    Login form validation and authentication 

    */
    public function login_validation(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        // Validate user
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('connect');
            
            // Authenticate user
            if($this->connect->login_auth($username, $password))
            {
                // If auth user
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url(). 'index.php/main/enter');
            }
            else
            {
                // If not auth user
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(base_url(). 'index.php/main/login');
            }
        }
        else
        {
            // If invalid redirect to login
            $this->login();
        }

    }

    /*

    Initiating the dashboard 

    */
    public function enter(){

        // If session is created with the username
        if($this->session->userdata('username') != '')
        {
            //Navbar 
            $data["username"] = $this->session->userdata('username');
            $this->load->view('navbar',$data);
            
            $this->load->model('connect');
            $p['services'] = $this->connect->get_service();        
            $this->load->view('dashboard',$p);

        }
        else
        {
            // Session not found
            redirect(base_url(). 'main/login');
        }

    }

    public function logout(){

        $this->session->unset_userdata('username');
        redirect(base_url().'index.php/main/login');

    }

    /*

    Load dashboard when dashboard button is clicked on the navbar

    */
    public function dashboard(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);

        $this->load->model('connect');
        $data['services'] = $this->connect->get_service();        
        $this->load->view('dashboard',$data);

    }

    /*

    

    */ 
    public function add_service(){

        // Navbar
        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);

        $this->load->model('connect');
        $data['services'] = $this->connect->get_service();        
        $this->load->view('dashboard',$data);

    }

    /*

    Remove a service 
    
    */

    public function remove_service(){
        
        $this->load->model('connect');
        $id=$this->input->get('id');
        if($this->connect->rem_service($id))
        {
            // Redirect to the dashboard
            redirect(base_url()."index.php/main/enter");
        }

    }
    /*

    Direct to the edit_service view when Edit is clicked

    */

    public function edit_service(){

        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);

        $this->load->model('connect');
        $id=$this->input->get('id');
        if($this->connect->ed_service($id))
        {
            $data['services'] = $this->connect->ed_service($id);        
            $this->load->view('edit_service',$data);
        }
        
    }

    public function save_edit_service(){

        //$service_id = $this->uri->segment(3);
        $service_id = $this->input->get('id');
        $this->load->model('connect');
        $data['service_data'] = $this->connect->get_by_id($service_id);
        $this->load->view('edit_service');
        
        
    }

    public function update_service()
    {
        $this->load->model('connect');        
        if($this->input->post('save'))
            {
                $name = $this->input->post('servicename');
                $price = $this->input->post('price');
                $description = $this->input->post('description');
                $this->connect->update_service($name,$price,$description,$id);
                redirect("main/edit_service");
            }
    }
    
    /*

    Signup form

    */


    public function signup()
    {
        $this->load->view('signup');

    }
    /*

    Signup validation and auth
    To be completed...

    */

    public function signup_validate()
    {
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'CPassword', 'required');
        
        if($this->input->post('save'))
        {
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $uname = $this->input->post('uname');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $isAdmin = 0;
            $this->connect->sign_up($fname, $lname, $uname, $email, $password, $isAdmin);
        }
    }

    /*

    Add a new service 

    */
    public function addnewservice()
    {
        // Navbar
        $p["username"] = $this->session->userdata('username');
        $this->load->view('navbar',$p);

        // add_new_service view
        $this->load->view('add_new_service');
        $this->load->model('connect');
        $data = array(
            "name" => $this->input->post("servicename"),
            "price" => $this->input->post("price"),
            "description" => $this->input->post("description")
        );
        if($data['name'] != NULL)
        {
            // If name available
            $this->connect->add_service($data);
        }


    }

    
 }
?>