<?php
	class Police_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_police($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('police.id', 'DESC');
				$query = $this->db->get('police');
				return $query->result_array();
			}

			$query = $this->db->get_where('police', array('slug' => $slug));
			return $query->row_array();
		}

		public function register($enc_password){
			// User data array

			$data = array(
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'address' => $this->input->post('address'),
				'department' => $this->input->post('department'),
				'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email'),
                'password' => $enc_password,
			);

			// Insert user
			return $this->db->insert('police', $data);
		}

		// Log user in
		public function login($name, $password){
			// Validate
			$this->db->where('name', $name);
			$this->db->where('password', $password);

			$result = $this->db->get('police');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		// Check name exists
		public function check_name_exists($name){
			$query = $this->db->get_where('police', array('name' => $name));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('police', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}