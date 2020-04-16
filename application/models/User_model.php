<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			$data = array(
                'nickname' => $this->input->post('nickname'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
			);
			return $this->db->insert('users', $data);
		}
	}