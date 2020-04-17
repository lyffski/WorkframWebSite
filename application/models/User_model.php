<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $enc_password,
			);
			return $this->db->insert("users", $data);
		}


		//check the if exits
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		//login		
		public function login($username, $password){
			$query = $this->db->get_where('users', array("username" => $username));
			if(empty($query->row_array())){
				return FALSE;
			}else{
				return TRUE;
			}
			$query2 = $this->db->get_where('users', array("password" => $password));
			if(empty($query2->row_array())){
				return FALSE;
			}else{
				return TRUE;
			}
		}
		public function logi($username, $password){
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}
	}



