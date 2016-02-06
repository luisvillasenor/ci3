<?php
class Psic_test3 extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Expedientes_model');
            $this->load->model('Pacientes_model');
            $this->load->model('Psic_test3_model');
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
                /*$data['psico_test3_item'] = $this->Psico_test3_model->get_psico_test3($id_paciente);
                if (empty($data['psico_test3_item'])) {
                        show_404();
                }*/

                $psic_test3_item = $this->Psic_test3_model->get_psic_test3();
                //print_r($psic_test3_item);
                $json = json_encode($psic_test3_item);
                echo $json;

                //$this->load->view('templates/header', $data);
                //$this->load->view('templates/navbar');
                //$this->load->view('psico_test3/view', $data);
                //$this->load->view('templates/footer');

        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->model('Psic_test3_model');
            $this->load->model('Expedientes_model');

            // Se reciven los resultados del test3 via POST y se almacenan en un arreglo
            $resp_test3 = array(
                'id_expediente' => $this->input->post('id_expediente'),
                'fecha_aplicacion_test3' => $this->input->post('fecha_aplicacion_test3'),
                'status_test3' => $this->input->post('status_test3'),
                'resp_test3_1' => $this->input->post('resp_test3_1'),
                'resp_test3_2' => $this->input->post('resp_test3_2'),
                'resp_test3_3' => $this->input->post('resp_test3_3'),
                'resp_test3_4' => $this->input->post('resp_test3_4'),
                'resp_test3_5' => $this->input->post('resp_test3_5'),
                'resp_test3_6' => $this->input->post('resp_test3_6'),
                'resp_test3_7' => $this->input->post('resp_test3_7'),
                'resp_test3_8' => $this->input->post('resp_test3_8'),
                'resp_test3_9' => $this->input->post('resp_test3_9'),
                'resp_test3_10' => $this->input->post('resp_test3_10'),
                'resp_test3_11' => $this->input->post('resp_test3_11'),
                'resp_test3_12' => $this->input->post('resp_test3_12'),
                'resp_test3_13' => $this->input->post('resp_test3_13'),
                'resp_test3_14' => $this->input->post('resp_test3_14')
            );

            // Agrego respuestas del test3 a la BD.
            $insert_id = $this->Psic_test3_model->set_psic_test3($resp_test3);
            // Calcula la ansiedad y actualiza el campo ansiedad
            $ansiedad = $this->ansiedad($insert_id);
            // Calcula el porcentaje de la ansiedad base 21 total
            $avance_ansiedad = $this->avance_ansiedad($insert_id,$ansiedad);

            // Calcula la depresion y actualiza el campo depresion
            $depresion = $this->depresion($insert_id);
            // Calcula el porcentaje de la depresion base 21 total
            $avance_depresion = $this->avance_depresion($insert_id,$depresion);

            // Numero de Expediente en cuestion.
            $id_expediente = $this->input->post('id_expediente');
            // Actualizo el status_test3 del Expediente en cuestion con el dato de avance_test3 anterior
            
            //$this->Expedientes_model->update_status_test3($id_expediente,$avance_test3 = 1);
            // Redirecciona a la pagina del Expediente en cuestion.
            redirect('expedientes/'.$id_expediente);
        }

        public function ansiedad($insert_id){
            $this->load->model('Psic_test3_model');
            $res = $this->Psic_test3_model->ansiedad($insert_id);
            foreach ($res as $key => $value) {
                if ($key == 'ansiedad') {
                    $ansiedad = $value;
                }                
            }
            $this->Psic_test3_model->update_ansiedad($ansiedad,$insert_id);
            return $ansiedad;
        }

        public function avance_ansiedad($insert_id,$ansiedad){
            $this->load->model('Psic_test3_model');
            $val_max = 21;
            $res = $this->Psic_test3_model->avance_ansiedad($insert_id,$val_max,$ansiedad);
            foreach ($res as $key => $value) {
                if ($key == 'avance') {
                    $avanceansiedad = $value;
                }                
            }
            $this->Psic_test3_model->update_avance_ansiedad($avanceansiedad,$insert_id);
            return $avanceansiedad;
        }


        public function depresion($insert_id){
            $this->load->model('Psic_test3_model');
            $res = $this->Psic_test3_model->depresion($insert_id);
            foreach ($res as $key => $value) {
                if ($key == 'depresion') {
                    $depresion = $value;
                }                
            }
            $this->Psic_test3_model->update_depresion($depresion,$insert_id);
            return $depresion;
        }

        public function avance_depresion($insert_id,$depresion){
            $this->load->model('Psic_test3_model');
            $val_max = 21;
            $res = $this->Psic_test3_model->avance_depresion($insert_id,$val_max,$depresion);
            foreach ($res as $key => $value) {
                if ($key == 'avance') {
                    $avancedepresion = $value;
                }                
            }
            $this->Psic_test3_model->update_avance_depresion($avancedepresion,$insert_id);
            return $avancedepresion;
        }

}