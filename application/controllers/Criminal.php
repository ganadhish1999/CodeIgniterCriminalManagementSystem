<?php
	class Criminal extends CI_Controller{
		public function index($offset = 0){	
			// Pagination Config	
			$config['base_url'] = base_url() . 'criminal/';
			$config['total_rows'] = $this->db->count_all('criminal');
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			// $this->pagination->initialize($config);

			$data['title'] = 'Criminals';

			$data['criminal'] = $this->criminal_model->get_criminal(FALSE, $offset);

			$this->load->view('templates/header');
			$this->load->view('criminal/index', $data);
			$this->load->view('templates/footer');
		}

		// public function view($slug = NULL){
		// 	$data['post'] = $this->post_model->get_posts($slug);
		// 	$post_id = $data['post']['id'];
		// 	$data['comments'] = $this->comment_model->get_comments($post_id);

		// 	if(empty($data['post'])){
		// 		show_404();
		// 	}

		// 	$data['title'] = $data['post']['title'];

		// 	$this->load->view('templates/header');
		// 	$this->load->view('posts/view', $data);
		// 	$this->load->view('templates/footer');
		// }

		public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Add Criminal';

			// $data['categories'] = $this->post_model->get_categories();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('age', 'Age', 'required');
			$this->form_validation->set_rules('crime', 'Crime', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('criminal/create', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				// $config['upload_path'] = './assets/images/posts';
				// $config['allowed_types'] = 'gif|jpg|png';
				// $config['max_size'] = '2048';
				// $config['max_width'] = '2000';
				// $config['max_height'] = '2000';

				// $this->load->library('upload', $config);

				// if(!$this->upload->do_upload()){
				// 	$errors = array('error' => $this->upload->display_errors());
				// 	$post_image = 'noimage.jpg';
				// } else {
				// 	$data = array('upload_data' => $this->upload->data());
				// 	$post_image = $_FILES['userfile']['name'];
				// }

				$this->criminal_model->create_criminal();

				// Set message
				$this->session->set_flashdata('criminal_created', 'Your criminal has been added');

				redirect('home');
			}
		}

		// public function delete($id){
		// 	// Check login
		// 	if(!$this->session->userdata('logged_in')){
		// 		redirect('users/login');
		// 	}

		// 	$this->post_model->delete_post($id);

		// 	// Set message
		// 	$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

		// 	redirect('posts');
		// }

		// public function edit($slug){
		// 	// Check login
		// 	if(!$this->session->userdata('logged_in')){
		// 		redirect('users/login');
		// 	}

		// 	$data['post'] = $this->post_model->get_posts($slug);

		// 	// Check user
		// 	if($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']){
		// 		redirect('posts');

		// 	}

		// 	$data['categories'] = $this->post_model->get_categories();

		// 	if(empty($data['post'])){
		// 		show_404();
		// 	}

		// 	$data['title'] = 'Edit Post';

		// 	$this->load->view('templates/header');
		// 	$this->load->view('posts/edit', $data);
		// 	$this->load->view('templates/footer');
		// }

		// public function update(){
		// 	// Check login
		// 	if(!$this->session->userdata('logged_in')){
		// 		redirect('users/login');
		// 	}

		// 	$this->post_model->update_post();

		// 	// Set message
		// 	$this->session->set_flashdata('post_updated', 'Your post has been updated');

		// 	redirect('posts');
		// }
	}