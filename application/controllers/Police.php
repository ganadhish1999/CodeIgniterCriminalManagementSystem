<?php
	class Police extends CI_Controller{
		// Register user

		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required|callback_check_name_exists');
			// $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('phone_number', 'phone_number', 'required');
			$this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('age', 'Age', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('police/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->police_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('police/login');
			}
		}

		// Log in user
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('police/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				// Get username
				$name = $this->input->post('name');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->police_model->login($name, $password);
				if($user_id){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'name' => $name,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('criminal');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('police/login');
				}		
			}
		}

		// Log user out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('name');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('police/login');
		}

		// Check if username exists
		public function check_name_exists($name){
			$this->form_validation->set_message('check_name_exists', 'That name is taken. Please choose a different one');
			if($this->police_model->check_name_exists($name)){
				return true;
			} else {
				return false;
			}
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->police_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
	}