<?php 
	class Users extends CI_Controller{
		//register function
		public function register(){
			$data['title'] = 'SignUp';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				// encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('posts','refresh');
			}
		}

				//login function
			public function login(){
			$data['title'] = 'Login';

			$this->form_validation->set_rules('username', 'Username', 'required');			
			$this->form_validation->set_rules('password', 'Password', 'required');
			

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {

				//get username
				$username = $this->input->post('username');
				// get and encrypt password
				$password = md5($this->input->post('password'));

				//login user
				$user_id = $this->user_model->login($username, $password);
				if($user_id){
					//create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);
					//set message
				$this->session->set_flashdata('user_loggedin', 'You are now  logged in');

				redirect('posts','refresh');

				}else{
					//set message
				$this->session->set_flashdata('login_failed', 'Login is invalid');

				redirect('users/login');

				}
				
				
				
			}
		}

			//log out user
				public function logout(){
					$this->session->unset_userdata('logged_in');
					$this->session->unset_userdata('user_id');
					$this->session->unset_userdata('username');

					//set message
				$this->session->set_flashdata('user_logout', 'You are now logged Out');

				redirect('users/login');
				}



	}