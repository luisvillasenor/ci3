<?php
class Einicial extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Expedientes_model');
                $this->load->model('Pacientes_model');
                $this->load->model('Preg_test1_model');
                $this->load->model('Resp_test1_model');
                $this->load->model('Psic_test1_model');

                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['title'] = 'Evaluación Inicial';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('einicial/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($id_expediente = NULL)
        {
            $data['title'] = 'Evaluación Inicial';
            
            $data['status_test1'] = $this->Psic_test1_model->get_status_test1($id_expediente);
                
            $data['get_preg_test1'] = $this->Preg_test1_model->get_preg_test1();
            $data['get_resp_test1'] = $this->Resp_test1_model->get_resp_test1();

            $data['get_test1'] = $this->Psic_test1_model->get_test1($id_expediente);
            $data['expediente_item'] = $this->Expedientes_model->get_expedientes($id_expediente);
            
            if (empty($data['get_test1']))
            {
                    $data['id_expediente'] = $data['expediente_item']['id_expediente'];
                    $data['id_paciente'] = $data['expediente_item']['id_paciente'];
                    $id_paciente = $data['expediente_item']['id_paciente'];
                    $data['pacientes'] = $this->Pacientes_model->get_pacientes($id_paciente);
                    $data['nombre_completo'] = $data['pacientes']['nombre_completo'];

                    $data['get_test1'] = '';
                    $data['calificacion'] = '0';
                    $data['avance'] = '0';

            }
            else{
                    $data['id_expediente'] = $data['expediente_item']['id_expediente'];
                    $data['id_paciente'] = $data['expediente_item']['id_paciente'];
                    $id_paciente = $data['expediente_item']['id_paciente'];
                    $data['pacientes'] = $this->Pacientes_model->get_pacientes($id_paciente);
                    $data['nombre_completo'] = $data['pacientes']['nombre_completo'];

                    foreach ($data['get_test1'] as $key => $value) {
                        $data[$key] = $value;
                    }
                    $data['calificacion'] = $data['get_test1']['calificacion'];
                    $data['avance'] = $data['get_test1']['avance'];
            }

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('einicial/view', $data);
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
                redirect('expedientes/'.$id_expediente);
            }
        }


}