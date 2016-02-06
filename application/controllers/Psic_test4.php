<?php
class Psic_test4 extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Expedientes_model');
                $this->load->model('Pacientes_model');
                $this->load->model('Psic_test4_model');
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

        public function view()
        {
                /*$data['psico_test4_item'] = $this->Psico_test4_model->get_psico_test4($id_paciente);
                if (empty($data['psico_test4_item'])) {
                        show_404();
                }*/

                $psic_test4_item = $this->Psic_test4_model->get_psic_test4();
                //print_r($psic_test4_item);
                $json = json_encode($psic_test4_item);
                echo $json;

                //$this->load->view('templates/header', $data);
                //$this->load->view('templates/navbar');
                //$this->load->view('psico_test4/view', $data);
                //$this->load->view('templates/footer');

        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->model('Psic_test4_model');
            $this->load->model('Expedientes_model');

            // Se reciven los resultados del test4 via POST y se almacenan en un arreglo
            $resp_test4 = array(
                'id_expediente' => $this->input->post('id_expediente'),
                'fecha_aplicacion_test4' => $this->input->post('fecha_aplicacion_test4'),
                'status_test4' => $this->input->post('status_test4'),
                'resp_test4_1' => $this->input->post('resp_test4_1'),
                'resp_test4_2' => $this->input->post('resp_test4_2'),
                'resp_test4_3' => $this->input->post('resp_test4_3'),
                'resp_test4_4' => $this->input->post('resp_test4_4'),
                'resp_test4_5' => $this->input->post('resp_test4_5'),
                'resp_test4_6' => $this->input->post('resp_test4_6'),
                'resp_test4_7' => $this->input->post('resp_test4_7'),
                'resp_test4_8' => $this->input->post('resp_test4_8'),
                'resp_test4_9' => $this->input->post('resp_test4_9'),
                'resp_test4_10' => $this->input->post('resp_test4_10'),
                'resp_test4_11' => $this->input->post('resp_test4_11'),
                'resp_test4_12' => $this->input->post('resp_test4_12'),
                'resp_test4_13' => $this->input->post('resp_test4_13'),
                'resp_test4_14' => $this->input->post('resp_test4_14'),
                'resp_test4_15' => $this->input->post('resp_test4_15'),
                'resp_test4_16' => $this->input->post('resp_test4_16')
            );

            // Agrego respuestas del test4 a la BD.
            $insert_id = $this->Psic_test4_model->set_psic_test4($resp_test4);
            // Calcula la neurosis y actualiza el campo neurosis
            $neurosis = $this->neurosis($insert_id);
            // Calcula el porcentaje de la neurosis base 44 total
            $avance_test4 = $this->avance($insert_id,$neurosis);
            // Numero de Expediente en cuestion.
            $id_expediente = $this->input->post('id_expediente');
            // Actualizo el status_test4 del Expediente en cuestion con el dato de avance_test4 anterior
            //$this->Expedientes_model->update_status_test4($id_expediente,$avance_test4);

            // Redirecciona a la pagina del Expediente en cuestion.
            redirect('expedientes/'.$id_expediente);
        }

        public function neurosis($insert_id){
            $this->load->model('Psic_test4_model');
            $res = $this->Psic_test4_model->neurosis($insert_id);
            foreach ($res as $key => $value) {
                if ($key == 'neurosis') {
                    $neurosis = $value;
                }                
            }
            //echo $res;
            $this->Psic_test4_model->update_calificacion($neurosis,$insert_id);
            return $neurosis;
        }


        public function avance($insert_id,$neurosis){
            $this->load->model('Psic_test4_model');
            $val_max = 16;
            $res = $this->Psic_test4_model->avance($insert_id,$val_max,$neurosis);
            foreach ($res as $key => $value) {
                if ($key == 'avance') {
                    $avance = $value;
                }                
            }
            //echo $res;
            $this->Psic_test4_model->update_avance($avance,$insert_id);
            return $avance;
        }



}