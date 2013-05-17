<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
class home extends CI_Controller
{
    public function homepage()
    { $data['title']="HOMEPAGE";
        $this->load->view('homepage',$data);
       
       
    }/*
    public function workshop1()
    {
        $data['title']="WORKSHOP1";
        $this->load->view('workshop1',$data);
        
        $this->load->model('get_db');
        $data['select']=$this->get_db->table();
                $this->load->view('workshop1',$data);
                
                    }
     */         public function insert_table1()
                    {
                        $fname=$_POST['fname'];
                        $marks=$_POST['marks'];
                        $this->load->model('insert_table');
                        $this->insert_table->insert_db($fname,$marks);
                        
                    }
    
}
?>
