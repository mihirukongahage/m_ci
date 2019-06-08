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

        $this->load->model('GetRatings');
        $rate_array = $this->GetRatings->averageRating();

        /*Calculate the average rating*/ 
        $tot_rate = 0; 
        $count = 0;
        foreach ($rate_array->result_array() as $row) {
            $tot_rate = $tot_rate + $row['rate'];
            $count = $count + 1;
        }
        $data['avg_rate'] = $tot_rate/$count;

        /*Load navigation bar*/ 
        $this->load->view('navbar');

        $data['comment_array'] = $this->GetRatings->displayReviews();
        /*Calculate the average rating*/ 
        $this->load->view('ratings_and_reviews',$data);
        
        
    }

    public function reservation(){

        $this->load->view('navbar');
        $this->load->model('GetRatings');
        //$rate_array = $this->GetRatings->averageRating();
        $data['reservation_array'] = $this->GetRatings->viewReservation();
        $this->load->view('reserve',$data);
    }
}
?>