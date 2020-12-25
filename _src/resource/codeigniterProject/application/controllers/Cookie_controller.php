<?php

class Cookie_Controller extends CI_Controller {
    
    function __construct(){
        
        parent::__construct();
        $this->load->helper(array('cookie','url'));
    }
    
    public function index(){
        // Initializing a cookie
        
        set_cookie('cookie_name','cookie_value','3600');
        $this->load->view('Cookie_view');
        
    }
    
    
    // We display the values inside cookie
    public function display_cookie(){
        echo get_cookie('cookie_name');
        $this->load->view('Cookie_view');
        
        
    }
    
    public function deletecookie(){
        
        //The associated cookie will be deleted from the application
        delete_cookie('cookie_name');
        redirect('cookie_name');
        
        
    }
    
}