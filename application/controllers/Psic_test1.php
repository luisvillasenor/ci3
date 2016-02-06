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

        public function view()
        {
                /*$data['psico_test1_item'] = $this->Psico_test1_model->get_psico_test1($id_paciente);
                if (empty($data['psico_test1_item'])) {
                        show_404();
                }*/

                $psic_test1_item = $this->Psic_test1_model->get_psic_test1();
                //print_r($psic_test1_item);
                $json = json_encode($psic_test1_item);
                echo $json;

                //$this->load->view('templates/header', $data);
                //$this->load->view('templates/navbar');
                //$this->load->view('psico_test1/view', $data);
                //$this->load->view('templates/footer');

        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->model('Psic_test1_model');
            $this->load->model('Expedientes_model');

            // Se reciven los resultados del Test1 via POST y se almacenan en un arreglo
            $resp_test1 = array(
                'id_expediente' => $this->input->post('id_expediente'),
                'fecha_aplicacion' => $this->input->post('fecha_aplicacion'),
                'status_test1' => $this->input->post('status_test1'),
                'resp_test1_1' => $this->input->post('resp_test1_1'),
                'resp_test1_2' => $this->input->post('resp_test1_2'),
                'resp_test1_3' => $this->input->post('resp_test1_3'),
                'resp_test1_4' => $this->input->post('resp_test1_4'),
                'resp_test1_5' => $this->input->post('resp_test1_5'),
                'resp_test1_6' => $this->input->post('resp_test1_6'),
                'resp_test1_7' => $this->input->post('resp_test1_7'),
                'resp_test1_8' => $this->input->post('resp_test1_8'),
                'resp_test1_9' => $this->input->post('resp_test1_9'),
                'resp_test1_10' => $this->input->post('resp_test1_10'),
                'resp_test1_11' => $this->input->post('resp_test1_11')
            );

            // Agrego respuestas del Test1 a la BD.
            $insert_id = $this->Psic_test1_model->set_psic_test1($resp_test1);
            // Calcula la calificacion y actualiza el campo calificacion
            $calificacion = $this->calificacion($insert_id);
            // Calcula el porcentaje de la calificacion base 44 total
            $avance_test1 = $this->avance($insert_id,$calificacion);
            // Numero de Expediente en cuestion.
            $id_expediente = $this->input->post('id_expediente');
            // Actualizo el status_test1 del Expediente en cuestion con el dato de avance_test1 anterior
            $this->Expedientes_model->update_status_test1($id_expediente,$avance_test1);

            // Redirecciona a la pagina del Expediente en cuestion.
            redirect('expedientes/'.$id_expediente);
        }

        public function calificacion($insert_id){
            $this->load->model('Psic_test1_model');
            $res = $this->Psic_test1_model->calificacion($insert_id);
            foreach ($res as $key => $value) {
                if ($key == 'calificacion') {
                    $calificacion = $value;
                }                
            }
            //echo $res;
            $this->Psic_test1_model->update_calificacion($calificacion,$insert_id);
            return $calificacion;
        }


        public function avance($insert_id,$calificacion){
            $this->load->model('Psic_test1_model');
            $val_max = 44;
            $res = $this->Psic_test1_model->avance($insert_id,$val_max,$calificacion);
            foreach ($res as $key => $value) {
                if ($key == 'avance') {
                    $avance = $value;
                }                
            }
            //echo $res;
            $this->Psic_test1_model->update_avance($avance,$insert_id);
            return $avance;
        }



}