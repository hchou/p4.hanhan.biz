<?php

class chat_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            Router::redirect("/users/login");
        }
        
    }    
    
    public function index() {
    
        # Set up the View
        $this->template->content = View::instance('v_chat_index');
        $this->template->title   = "Interactive Chat";
            
        # Render the View
        echo $this->template;
    
    }
}