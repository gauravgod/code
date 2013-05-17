<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class get_db extends CI_Model

{
    
    public function table()
    {
        
        $query=$this->db->query("SELECT * FROM stud");
        return $query->result();
    }
}
?>
