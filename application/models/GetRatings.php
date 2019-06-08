<?php
class GetRatings extends CI_Model{


    function averageRating()
    {
        $this->load->database();
        $rate_array = $this->db->query("SELECT * FROM ratings");
        //$rate_array = $this->db->get('rate');
        return $rate_array;
        
    }

    function displayReviews()
    {
        $this->load->database();
        $row = $this->db->query("SELECT * FROM ratings");
        //$row = $this->db->get('ratings');
        if($row->num_rows()>0){
            foreach($row->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
        // return $comment_array;
        
    }

    function viewReservation()
    {
        $this->load->database();
        //$row = $this->db->query("SELECT * FROM users");
        $row = $this->db->get('users');
        if($row->num_rows()>0){
            foreach($row->result() as $row){
                $data[]=$row;
            }
            
            return $data;
        }
        
        
    }

}
?>