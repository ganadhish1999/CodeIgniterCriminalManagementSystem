<?php
	class Criminal extends CI_Controller{
		public function index($offset = 0){	
			$data['title'] = 'Criminals';

			$data['criminal'] = $this->criminal_model->get_criminal(FALSE, $offset);

			$this->load->view('templates/header');
			$this->load->view('criminal/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('police/login');
			}

			$data['title'] = 'Add Criminal';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('age', 'Age', 'required');
			$this->form_validation->set_rules('crime', 'Crime', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('criminal/create', $data);
				$this->load->view('templates/footer');
			} else {

				$this->criminal_model->create_criminal();

				// Set message
				$this->session->set_flashdata('criminal_created', 'Your criminal has been added');

				redirect('criminal/index');
			}
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('police/login');
			}

			$this->criminal_model->delete_criminal($id);

			// Set message
			$this->session->set_flashdata('criminal_deleted', 'Criminal has been deleted');

			redirect('criminal/index');
		}
	}