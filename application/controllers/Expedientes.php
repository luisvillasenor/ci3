<?php
class Expedientes extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Expedientes_model');
                $this->load->model('Pacientes_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['expedientes'] = $this->Expedientes_model->get_expedientes();
                $data['title'] = 'Expedientes Psicometricos';

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('expedientes/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($nombre_exp = NULL)
        {
                $data['expediente_item'] = $this->Expedientes_model->get_expedientes($nombre_exp);
                if (empty($data['expediente_item']))
                {
                        show_404();
                }

                $data['title'] = $data['expediente_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('expedientes/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a expedientes item';

            $this->form_validation->set_rules('nombre_completo', 'nombre_completo', 'required');
            $this->form_validation->set_rules('edad', 'edad', 'required');
            $this->form_validation->set_rules('sexo', 'sexo', 'required');
            $this->form_validation->set_rules('aplicador', 'aplicador', 'required');
            $this->form_validation->set_rules('grupo', 'grupo', 'required');
                                    
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header', $data);
                //$this->load->view('templates/navbar');
                //$this->load->view('expedientes/create');
                //$this->load->view('templates/footer');
                redirect('gestalt');

            }
            else {
                
                $id_paciente = $this->Pacientes_model->set_pacientes();
                $miembro = 'psicologo01';
                $aplicador = $this->input->post('aplicador');
                $status = '1';
                $id_expediente = $this->Expedientes_model->set_expedientes($id_paciente,$miembro,$aplicador,$status);
                redirect('mispacientes');
            }
        }


}