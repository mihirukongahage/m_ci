<?php
class Name extends CI_Model{

    function __construct() {}
    
    public function show_name(){
        $results = array(
            'index1' => "I am index 1",
            'index2' => "I am index 2",
        );
        return $results;
    }
}
?>