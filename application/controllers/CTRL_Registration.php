<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTRL_Registration extends CI_Controller {

    public function index(){

        $this->load->model('Reg_Model');
        $data['userArray'] = $this->Reg_Model->return_users();
        $this->load->view('registration',$data);
        //print_r( $data['userArray']);
    }
}
?>