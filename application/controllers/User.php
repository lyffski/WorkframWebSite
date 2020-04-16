<?php
class User extends CI_Controller{
    public function login(){

        $data['title'] = "Login";

        $this->load->view("templates/header");
        $this->load->view("user/login", $data);
        $this->load->view("templates/footer");
    }
}