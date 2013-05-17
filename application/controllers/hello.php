<?php
class Hello extends CI_Controller
{
    //spublic $asb;
    public function you_view()
    {
        
        echo 'Code I WORKS!!!';
        $this->hell();
        $this->load->view('you_view');
    }
    
  public function hell()
 {
   echo "hello me";
   }
    
    
}
?>