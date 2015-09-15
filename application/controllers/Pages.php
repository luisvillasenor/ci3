<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	public function view($page = 'home')
    {

    	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
 
        $data['title'] = ucfirst($page); // Capitalize the first letter

        switch ($page) {
        	case 'mispacientes':
        		$this->load->model('Expedientes_model');
                $this->load->model('Psic_test1_model');
        		$data['expedientes'] = $this->Expedientes_model->get_expedientes();

        		break;
            case 'miexpediente':
                $this->load->model('Expedientes_model');
                $id_paciente = $this->input->post('id_paciente');
                $id_expediente = $this->input->post('id_expediente');
                $data['id_paciente'] = $id_paciente;
                $data['id_expediente'] = $id_expediente;
                $data['expedientes'] = $this->Expedientes_model->get_expedientes($id_expediente);
                break;          
        	case 'einicial':
        		$this->load->model('Preg_test1_model');
        		$this->load->model('Resp_test1_model');
                
                $data['id_paciente'] = $this->input->post('id_paciente');

        		$data['get_preg_test1'] = $this->Preg_test1_model->get_preg_test1();
        		$data['get_resp_test1'] = $this->Resp_test1_model->get_resp_test1();
        		break;
        	default:
        		break;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);



    }



}