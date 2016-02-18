<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/footer');
	}
	public function tables()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/tables');
		$this->load->view('dashboard/footer');
	}	
	public function charts()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/charts');
		$this->load->view('dashboard/footer');
	}	
	public function forms()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/forms');
		$this->load->view('dashboard/footer');
	}
	public function blank()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/blank');
		$this->load->view('dashboard/footer');
	}
	public function pacientes()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/pacientes_view');
		$this->load->view('dashboard/footer');
	}
	public function pacienteslist()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/pacienteslist');
		$this->load->view('dashboard/footer');
	}

	public function form_new_paciente()
	{
		$this->form_validation->set_rules('title','Nombre Completo','trim|required|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('edad','Edad','trim|required|min_length[1]|max_length[2]|integer');
		
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dashboard/form_new_paciente');
		}
			else {
				$data['title'] = $this->input->post('title');
				$this->load->view('dashboard/formsuccess',$data);				
			}
		$this->load->view('dashboard/footer');

	}
	public function form_edit_paciente()
	{
		$this->form_validation->set_rules('title','Nombre Completo','trim|required|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('edad','Edad','trim|required|min_length[1]|max_length[2]|integer');
		
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dashboard/form_edit_paciente');
		}
			else {
				$data['title'] = $this->input->post('title');
				$data['edad'] = $this->input->post('edad');
				$this->load->view('dashboard/formsuccess',$data);				
			}
		$this->load->view('dashboard/footer');

	}
	public function form_edit_profile()
	{
		$this->form_validation->set_rules('title','Nombre Completo','trim|required|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dashboard/form_edit_profile');
		}
			else {
				$data['title'] = $this->input->post('title');
				$data['email'] = $this->input->post('email');
				$this->load->view('dashboard/formsuccess',$data);				
			}
		$this->load->view('dashboard/footer');

	}

	public function bootstrapelements()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/navigation');
		$this->load->view('dashboard/bootstrapelements');
		$this->load->view('dashboard/footer');
	}




}
