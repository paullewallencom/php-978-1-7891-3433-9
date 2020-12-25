<?php


class Redirect_controller extends CI_controller {
    
    
    
    // This calls for default function
    public function index(){
       $this->load->helper('url');
        /*Redirect the user to Google */
        
        redirect("http://www.google.co.in");
        
        
    }
    
    public function computer_graphics(){
        /*Load the URL helper
        
        https://en.wikipedia.org/wiki/Computer_graphics
        */
        
        $this->load->helper('url');
        //Redirect to computer graphics section
        
        redirect("https://en.wikipedia.org/wiki/Computer_graphics");
        
        
    }
    
    
    
}

?>