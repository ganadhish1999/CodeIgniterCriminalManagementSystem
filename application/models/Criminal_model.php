<?php
	class Criminal_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_criminal($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('criminal.id', 'DESC');
				$query = $this->db->get('criminal');
				return $query->result_array();
			}

			$query = $this->db->get_where('criminal', array('slug' => $slug));
			return $query->row_array();
		}

		public function search_criminal($name) {
			$query = $this->db->get_where('criminal', array('name' => $name));
			return $query->row_array();
		}

		public function create_criminal(){

			$data = array(
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'crime' => $this->input->post('crime'),
				'police_id' => $this->session->userdata('user_id'),
			);

			return $this->db->insert('criminal', $data);
		}

		public function delete_criminal($id){
			$this->db->where('id', $id);
			$this->db->delete('criminal');
			
			return true;
		}

	}