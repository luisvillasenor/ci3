<?php
class Einicial extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Expedientes_model');
                $this->load->model('Pacientes_model');
                //TEST1
                $this->load->model('Preg_test1_model');
                $this->load->model('Resp_test1_model');
                $this->load->model('Psic_test1_model');
                //TEST3
                $this->load->model('Preg_test3_model');
                $this->load->model('Resp_test3_model');
                $this->load->model('Psic_test3_model');

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
            $data['expediente_item'] = $this->Expedientes_model->get_expedientes($id_expediente);

            // TEST1
            $data['status_test1'] = $this->Psic_test1_model->get_status_test1($id_expediente);
            $data['get_preg_test1'] = $this->Preg_test1_model->get_preg_test1();
            $data['get_resp_test1'] = $this->Resp_test1_model->get_resp_test1();
            $data['get_test1'] = $this->Psic_test1_model->get_test1($id_expediente);
            if (empty($data['get_test1']))
            {
                    $data['id_expediente'] = $data['expediente_item']['id_expediente'];
                    $data['id_paciente'] = $data['expediente_item']['id_paciente'];
                    $id_paciente = $data['expediente_item']['id_paciente'];
                    $data['pacientes'] = $this->Pacientes_model->get_pacientes($id_paciente);

                    
                    $data['nombre_completo'] = $data['pacientes']['nombre_completo'];
                    $data['edad'] = $data['pacientes']['edad'];
                    $data['sexo'] = $data['pacientes']['sexo'];
                    $data['grupo'] = $data['pacientes']['grupo'];
                    $data['dias_abs'] = $data['pacientes']['dias_abs'];
                    $data['droga'] = $data['pacientes']['droga'];
                    $data['t_consumo'] = $data['pacientes']['t_consumo'];
                    $data['droga_ini'] = $data['pacientes']['droga_ini'];
                    $data['edad1con'] = $data['pacientes']['edad1con'];
                    $data['edo_civ'] = $data['pacientes']['edo_civ'];
                    $data['hijos'] = $data['pacientes']['hijos'];
                    $data['escolaridad'] = $data['pacientes']['escolaridad'];
                    $data['trabajo'] = $data['pacientes']['trabajo'];
                    $data['creciste_en'] = $data['pacientes']['creciste_en'];

                    $data['get_test1'] = array(        
                        'fecha_aplicacion' => '',
                        'resp_test1_1' => '',
                        'resp_test1_2' => '',
                        'resp_test1_3' => '',
                        'resp_test1_4' => '',
                        'resp_test1_5' => '',
                        'resp_test1_6' => '',
                        'resp_test1_7' => '',
                        'resp_test1_8' => '',
                        'resp_test1_9' => '',
                        'resp_test1_10' => '',
                        'resp_test1_10' => ''
                    );

                    foreach ($data['get_test1'] as $key => $value) {
                        $data[$key] = $value;
                    }

                    $data['calificacion'] = '0';
                    $data['avance'] = '0';

            }
            else{
                    $data['id_expediente'] = $data['expediente_item']['id_expediente'];
                    $data['id_paciente'] = $data['expediente_item']['id_paciente'];
                    $id_paciente = $data['expediente_item']['id_paciente'];
                    $data['pacientes'] = $this->Pacientes_model->get_pacientes($id_paciente);

                    $data['nombre_completo'] = $data['pacientes']['nombre_completo'];
                    $data['edad'] = $data['pacientes']['edad'];
                    $data['sexo'] = $data['pacientes']['sexo'];
                    $data['grupo'] = $data['pacientes']['grupo'];
                    $data['dias_abs'] = $data['pacientes']['dias_abs'];
                    $data['droga'] = $data['pacientes']['droga'];
                    $data['t_consumo'] = $data['pacientes']['t_consumo'];
                    $data['droga_ini'] = $data['pacientes']['droga_ini'];
                    $data['edad1con'] = $data['pacientes']['edad1con'];
                    $data['edo_civ'] = $data['pacientes']['edo_civ'];
                    $data['hijos'] = $data['pacientes']['hijos'];
                    $data['escolaridad'] = $data['pacientes']['escolaridad'];
                    $data['trabajo'] = $data['pacientes']['trabajo'];
                    $data['creciste_en'] = $data['pacientes']['creciste_en'];

                    foreach ($data['get_test1'] as $key => $value) {
                        $data[$key] = $value;
                    }
                    $data['calificacion'] = $data['get_test1']['calificacion'];
                    $data['avance'] = $data['get_test1']['avance'];
            }
            

            // TEST3
            $data['status_test3'] = $this->Psic_test3_model->get_status_test3($id_expediente);
            $data['get_preg_test3'] = $this->Preg_test3_model->get_preg_test3();
            $data['get_resp_test3'] = $this->Resp_test3_model->get_resp_test3();
            $data['get_test3'] = $this->Psic_test3_model->get_test3($id_expediente);
            if (empty($data['get_test3']))
            {
                    $data['id_expediente'] = $data['expediente_item']['id_expediente'];
                    $data['id_paciente'] = $data['expediente_item']['id_paciente'];
                    $id_paciente = $data['expediente_item']['id_paciente'];
                    $data['pacientes'] = $this->Pacientes_model->get_pacientes($id_paciente);
                    
                    $data['nombre_completo'] = $data['pacientes']['nombre_completo'];
                    $data['edad'] = $data['pacientes']['edad'];
                    $data['sexo'] = $data['pacientes']['sexo'];
                    $data['grupo'] = $data['pacientes']['grupo'];
                    $data['dias_abs'] = $data['pacientes']['dias_abs'];
                    $data['droga'] = $data['pacientes']['droga'];
                    $data['t_consumo'] = $data['pacientes']['t_consumo'];
                    $data['droga_ini'] = $data['pacientes']['droga_ini'];
                    $data['edad1con'] = $data['pacientes']['edad1con'];
                    $data['edo_civ'] = $data['pacientes']['edo_civ'];
                    $data['hijos'] = $data['pacientes']['hijos'];
                    $data['escolaridad'] = $data['pacientes']['escolaridad'];
                    $data['trabajo'] = $data['pacientes']['trabajo'];
                    $data['creciste_en'] = $data['pacientes']['creciste_en'];

                    $data['get_test3'] = array(        
                        'fecha_aplicacion' => '',
                        'resp_test3_1' => '',
                        'resp_test3_2' => '',
                        'resp_test3_3' => '',
                        'resp_test3_4' => '',
                        'resp_test3_5' => '',
                        'resp_test3_6' => '',
                        'resp_test3_7' => '',
                        'resp_test3_8' => '',
                        'resp_test3_9' => '',
                        'resp_test3_10' => '',
                        'resp_test3_11' => '',
                        'resp_test3_12' => '',
                        'resp_test3_13' => '',
                        'resp_test3_14' => ''
                    );

                    foreach ($data['get_test3'] as $key_test3 => $value_test3) {
                        $data[$key_test3] = $value_test3;
                    }

                    $data['calificacion_test3'] = '0';
                    $data['avance_test3'] = '0';

            }
            else{
                    $data['id_expediente'] = $data['expediente_item']['id_expediente'];
                    $data['id_paciente'] = $data['expediente_item']['id_paciente'];
                    $id_paciente = $data['expediente_item']['id_paciente'];
                    $data['pacientes'] = $this->Pacientes_model->get_pacientes($id_paciente);

                    $data['nombre_completo'] = $data['pacientes']['nombre_completo'];
                    $data['edad'] = $data['pacientes']['edad'];
                    $data['sexo'] = $data['pacientes']['sexo'];
                    $data['grupo'] = $data['pacientes']['grupo'];
                    $data['dias_abs'] = $data['pacientes']['dias_abs'];
                    $data['droga'] = $data['pacientes']['droga'];
                    $data['t_consumo'] = $data['pacientes']['t_consumo'];
                    $data['droga_ini'] = $data['pacientes']['droga_ini'];
                    $data['edad1con'] = $data['pacientes']['edad1con'];
                    $data['edo_civ'] = $data['pacientes']['edo_civ'];
                    $data['hijos'] = $data['pacientes']['hijos'];
                    $data['escolaridad'] = $data['pacientes']['escolaridad'];
                    $data['trabajo'] = $data['pacientes']['trabajo'];
                    $data['creciste_en'] = $data['pacientes']['creciste_en'];

                    foreach ($data['get_test3'] as $key_test3 => $value_test3) {
                        $data[$key_test3] = $value_test3;
                    }
                    $data['calificacion_test3'] = $data['get_test3']['calificacion'];
                    $data['avance_test3'] = $data['get_test3']['avance'];
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