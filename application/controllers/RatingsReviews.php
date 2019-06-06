<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingsReviews extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    
    $this->load->database();
    $this->load->helper('url');
    
    }

    public function index(){

        echo "null";

    }

    public function view_average_ratings(){

        $this->load->model('GetRatings');
        $rate_array = $this->GetRatings->averageRating();
        //$this->load->view('ratings_and_reviews',$data);

        /*Calculate the average rating*/ 
        $tot_rate = 0; 
        $count = 0;
        foreach ($rate_array->result_array() as $row) {
            $tot_rate = $tot_rate + $row['rate'];
            $count = $count + 1;
        }
        $data['avg_rate'] = $tot_rate/$count;
        $this->load->view('ratings_and_reviews',$data);
    }

}
?>