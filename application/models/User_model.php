<?php
class User_model extends CI_model{
    public function login(){
        $this->form_validation->set_rules('fname' 'Forename' 'require');
        $this->form_validation->set_rules('lname' 'Lastname' 'require');
        $this->form_validation->set_rules('email' 'Email' 'require');
        $this->form_validation->set_rules('password' 'Password' 'require');
        $this->form_validation->set_rules('password2' 'Password2' 'matches[password]');
    
        if($this->form_validation->run() === FALSE){
                $this->load->view
        }else{

        }
    } 
}