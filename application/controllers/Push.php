<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Push extends CI_Controller {
    public function index(){
        echo "as"; 
        $this->load->model('Name');
        $user = $this->Name->name();
        echo $user;
    }
}
?>