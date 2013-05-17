<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class insert_table extends CI_Model{
    
    function insert_db($fname,$marks)
{
        
        $this->db->query("INSERT INTO stud VALUES('','$fname','$marks')");
}
}

?>
