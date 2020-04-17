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
		
		// public function login($username, $password){
		// 	// Validate
		// 	$this->db->where('username', $username);
		// 	$this->db->where('password', $password);
	
		// 	$result = $this->db->get('users');
	
		// 	if($result->num_rows() == 1){
		// 		return $result->row(0)->id;
		// 	} else {
		// 		return false;
		// 	}
		// }
		login		
		public function login($username1, $password1){
			$query = $this->db->get_where('users', array("username" => $username1));
			$query2 = $this->db->get_where('users', array("password" => $password1));
			if(empty($query->row_array()) &&  empty($query->row_array())){
				return TRUE;
			}else{
				return FALSE;
			}
			
		// }
		// public function login($username, $password){
		// 	$this->db->where('username', $username);
		// 	$this->db->where('password', $password);

		// 	$result = $this->db->get('users');

		// 	if($result->num_rows() == 1){
		// 		return $result->row(0)->id;
		// 	} else {
		// 		return false;
		// 	}
		// }
	}



