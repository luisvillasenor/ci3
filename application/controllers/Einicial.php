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
                //TEST2
                $this->load->model('Preg_test2_model');
                $this->load->model('Resp_test2_model');
                $this->load->model('Psic_test2_model');                
                //TEST3
                $this->load->model('Preg_test3_model');
                $this->load->model('Resp_test3_model');
                $this->load->model('Psic_test3_model');
                //TEST4
                $this->load->model('Preg_test4_model');
                $this->load->model('Resp_test4_model');
                $this->load->model('Psic_test4_model');

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
            $data['title'] = 'PROTOCOLO GESTALT';
            $data['expediente_item'] = $this->Expedientes_model->get_expedientes($id_expediente);
            $status_test1 = $data['expediente_item']['status_test1'];
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
            
            // TEST2
            $data['status_test2'] = $this->Psic_test2_model->get_status_test2($id_expediente);
            $data['get_preg_test2'] = $this->Preg_test2_model->get_preg_test2();
            $data['get_resp_test2'] = $this->Resp_test2_model->get_resp_test2();
            $data['get_test2'] = $this->Psic_test2_model->get_test2($id_expediente);
            if (empty($data['get_test2']))
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

                    $data['get_test2'] = array(        
                        'fecha_aplicacion' => '',
                        'resp_test2_1' => '',
                        'resp_test2_2' => '',
                        'resp_test2_3' => '',
                        'resp_test2_4' => '',
                        'resp_test2_5' => '',
                        'resp_test2_6' => '',
                        'resp_test2_7' => '',
                        'resp_test2_8' => '',
                        'resp_test2_9' => '',
                        'resp_test2_10' => '',
                        'resp_test2_11' => '',
                        'resp_test2_12' => '',
                        'resp_test2_13' => '',
                        'resp_test2_14' => '',
                        'resp_test2_15' => '',
                        'resp_test2_16' => '',
                        'resp_test2_17' => '',
                        'resp_test2_18' => '',
                        'resp_test2_19' => '',
                        'resp_test2_20' => '',
                        'resp_test2_21' => '',
                        'resp_test2_22' => '',
                        'resp_test2_23' => '',
                        'resp_test2_24' => '',
                        'resp_test2_25' => '',
                        'resp_test2_26' => '',
                        'resp_test2_27' => '',
                        'resp_test2_28' => '',
                        'resp_test2_29' => '',
                        'resp_test2_30' => '',
                        'resp_test2_31' => '',
                        'resp_test2_32' => '',
                        'resp_test2_33' => '',
                        'resp_test2_34' => '',
                        'resp_test2_35' => '',
                        'resp_test2_36' => '',
                        'resp_test2_37' => '',
                        'resp_test2_38' => '',
                        'resp_test2_39' => '',
                        'resp_test2_40' => ''
                    );

                    foreach ($data['get_test2'] as $key_test2 => $value_test2) {
                        $data[$key_test2] = $value_test2;
                    }

                    $data['calificacion_test2'] = '0';
                    $data['avance_test2'] = '0';

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

                    foreach ($data['get_test2'] as $key_test2 => $value_test2) {
                        $data[$key_test2] = $value_test2;
                    }
                    $data['calificacion_test2'] = $data['get_test2']['calificacion'];
                    $data['avance_test2'] = $data['get_test2']['avance'];
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
                        'fecha_aplicacion_test3' => '',
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

                    $data['ansiedad'] = '0';
                    $data['depresion'] = '0';
                    $data['avanceansiedad'] = '0';
                    $data['avancedepresion'] = '0';

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
                    $data['ansiedad'] = $data['get_test3']['ansiedad'];
                    $data['depresion'] = $data['get_test3']['depresion'];
                    $data['avanceansiedad'] = $data['get_test3']['avanceansiedad'];
                    $data['avancedepresion'] = $data['get_test3']['avancedepresion'];
            }

            // TEST4
            $data['status_test4'] = $this->Psic_test4_model->get_status_test4($id_expediente);
            $data['get_preg_test4'] = $this->Preg_test4_model->get_preg_test4();
            $data['get_resp_test4'] = $this->Resp_test4_model->get_resp_test4();
            $data['get_test4'] = $this->Psic_test4_model->get_test4($id_expediente);
            if (empty($data['get_test4']))
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

                    $data['get_test4'] = array(        
                        'fecha_aplicacion' => '',
                        'resp_test4_1' => '',
                        'resp_test4_2' => '',
                        'resp_test4_3' => '',
                        'resp_test4_4' => '',
                        'resp_test4_5' => '',
                        'resp_test4_6' => '',
                        'resp_test4_7' => '',
                        'resp_test4_8' => '',
                        'resp_test4_9' => '',
                        'resp_test4_10' => '',
                        'resp_test4_11' => '',
                        'resp_test4_12' => '',
                        'resp_test4_13' => '',
                        'resp_test4_14' => '',
                        'resp_test4_15' => '',
                        'resp_test4_16' => ''
                    );

                    foreach ($data['get_test4'] as $key_test4 => $value_test4) {
                        $data[$key_test4] = $value_test4;
                    }

                    $data['neurosis'] = '0';
                    $data['avanceneurosis'] = '0';

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

                    foreach ($data['get_test4'] as $key_test4 => $value_test4) {
                        $data[$key_test4] = $value_test4;
                    }
                    $data['neurosis'] = $data['get_test4']['neurosis'];
                    $data['avanceneurosis'] = $data['get_test4']['avanceneurosis'];
            }
            ///////////////////////////////////////////////
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