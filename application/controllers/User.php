<?php
class User extends CI_Controller{
    public function register(){
        //validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('fname', 'Forename', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password]');
        $data["title"] = "Register";

        //check if validation correct
        if($this->form_validation->run()===FALSE){
            $this->load->view("templates/header");
            $this->load->view("user/register", $data);
            $this->load->view("templates/footer");
        }else{
            $end_password = md5($this->input->post("password"));
            $this->user_model->register($enc_password);
            $this->session->set_flashdata('user_registered', 'Registration accomplished, can be login');
            redirect("posts");
        }

    }
}   
