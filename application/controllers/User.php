<?php
class User extends CI_Controller{
    public function register(){
        //validation
        $this->form_validation->set_rules('username', 'Username',   'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email',         'required|callback_check_email_exists');
        $this->form_validation->set_rules('username', 'Username',   'required|callback_check_username_exists');
        $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');
        $data["title"] = "Register";

        //check if validation correct
        if($this->form_validation->run()===FALSE){
            $this->load->view("templates/header");
            $this->load->view("user/register", $data);
            $this->load->view("templates/footer");
        }else{
            $enc_password = md5($this->input->post("password"));
            $this->user_model->register($enc_password);
            $this->session->set_flashdata('user_registered', 'Registration accomplished, can be login');
            redirect("home");
        }
    }
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is already occupied, take another one!');
        if($this->user_model->check_username_exists($username)){
            return TRUE;
        }else{return FALSE;}
    }
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 'That email is already occupied, take another one!');
        if($this->user_model->check_email_exists($email)){
            return TRUE;
        }else{return FALSE;}
    }

    public function login(){
        $data['title'] = "Login";
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        

        if($this->form_validation->run()){
            $userN = $this->input->post('username');
            $pwd = md5($this->input->post('password'));
            $conf = $this->user_model->login($userN, $pwd);
            if($conf == TRUE){
                redirect("home")
            }else{
                redirect("about")
            }
        }else{
            $this->load->view("templates/header");
            $this->load->view("user/login", $data);
            $this->load->view("templates/footer");    
        }
    }
}   
