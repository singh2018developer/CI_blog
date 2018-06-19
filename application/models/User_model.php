<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			//user data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'zipcode' => $this->input->post('zipcode')
			);
			//insert user
			return $this->db->insert('users', $data);
		}

		public function login($username, $password){
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id;
			}else{
				return False;
			}
		}
		
	}