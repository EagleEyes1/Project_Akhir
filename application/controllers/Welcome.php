<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pokemon', 'model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = FALSE)
	{
		if ($id === FALSE) {
			$data['home_post'] = $this->model->read();
			$this->load->view('header');
			$this->load->view('home', $data);
			$this->load->view('footer');
		} else {
			$data['post'] = $this->model->read($id);
			$this->load->view('header');
			$this->load->view('post', $data);
			$this->load->view('footer');
		}
	}

	public function create($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('type1', 'Type 1', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('create');
			$this->load->view('footer');
		} else {
			$id = uniqid('pokemon', TRUE);

			$config['upload_path'] = './upload/pokemon';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size'] = '100000';
			$config['file_ext_tolower'] = TRUE;
			$config['filename'] = str_replace('.', '_', $id);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('project_akhir/create');
			} else {
				$filename = $this->upload->data('file_name');
				$this->model->create($id, $filename);
				redirect();
			}
		}
	}

	public function update($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('type1', 'Type 1', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['post'] = $this->model->read($id);
			$this->load->view('header');
			$this->load->view('update', $data);
			$this->load->view('footer');
		} else {
			if ($this->input->post('file')) {
				$post = $this->model->read($id);

				$config['upload_path'] = './upload/post';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = '100000';
				$config['file_ext_tolower'] = TRUE;
				$config['overwrite'] = TRUE;
				$config['file_name'] = $post->filename;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$config['file_ext_tolower'] = TRUE;
					$this->session->set_flashdata('error', $this->upload->display_errors);
					redirect('project_akhir//update/' . $id);
				} else {
					$filename = $this->upload->data('file_name');
					$this->model->update($id,$filename);
					redirect();
				}
			} else {
				$this->model->update($id);
				redirect();
			}
		}
	}

	public function delete($id)
	{
		$post = $this->model->read($id);
		$this->model->delete($id);
		unlink('upload/post/' . $post->filename);
		redirect('');
	}

	public function deleteAll()
	{
		$this->model->deleteAll();
		redirect('');
	}
}
