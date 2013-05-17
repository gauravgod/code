<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class create extends CI_Model
{
    public function table()
    {
        $query=$this->db->query("SELECT * FROM stud");
        return $query->result();
        
    }
    public function input($data)
    {
       $this->db->insert('stud',$data);
    }
    
}

?>
