<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 *	- or -
	 * 		http://example.com/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	public function gestalt()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('gestalt');
		$this->load->view('footer');
	}

	public function validar($email = NULL){

		
			switch ($_SERVER["REQUEST_METHOD"]) {
			case 'GET':
				if (isset($email)) {
					$result = array('email' => $email);
				}				
				break;
			default:
				echo "ALGO ANDA MUY MAL -- DEFAULT";
				break;
			}
			header("Content-Type: application/json");
			echo json_encode($result);
		
	}


}