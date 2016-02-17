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
}
