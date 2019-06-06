<?php
class GetRatings extends CI_Model{


    function averageRating()
    {
        $this->load->database();
        $rate_array = $this->db->query("SELECT rate FROM ratings");
        //$rate_array = $this->db->get('rate');
        return $rate_array;
        
    }

}
?>