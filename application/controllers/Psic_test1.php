<?php
class Psic_test1 extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Expedientes_model');
                $this->load->model('Pacientes_model');
                $this->load->model('Psic_test1_model');
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
                if (empty($data['expediente_item'])) {
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
            $this->load->model('Psic_test1_model');
            $this->load->model('Expedientes_model');
            $id_paciente   = $this->input->post('id_paciente');
            $status_test1  = $this->input->post('status_test1');

            foreach ($_REQUEST as $key => $value) {
                if ( (substr($key, 0, 11) == 'resp_test1_') ) {
                    $id_preg_test1 = $key;
                    $id_preg_test1 = substr($key, 11);
                    $resp_test1 = $value;                    
                    $this->Psic_test1_model->set_psic_test1($id_preg_test1,$resp_test1,$id_paciente,$status_test1);
                }
            }

            $query = $this->Psic_test1_model->calcular_status($id_paciente);
            foreach ($query as $key => $value) {
                if ($key == 'suma') {
                    $suma_status_test1 = $value;
                }              
            }
            
            $this->Expedientes_model->update_status_test1($id_paciente,$suma_status_test1);

            redirect('mispacientes');
        }

        public function avance($id_paciente)
        {
            $this->load->model('Psic_test1_model');
            
            $id_paciente   = $this->input->post('id_paciente');
            

            redirect('mispacientes');
        }


}