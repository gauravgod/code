<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class insert_into_db extends CI_Model{
    
    function insert_db($fname,$marks)
{
        echo $fname.$marks;
        //$this->db->query("INSERT INTO tbl_name VALUES('','$fname','$marks')");
}
}
?>
