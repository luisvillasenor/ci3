<?php
class Pacientes_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_pacientes($id_paciente = FALSE)
		{
	        if ($id_paciente === FALSE)
	        {
                $query = $this->db->get('pacientes');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('pacientes', array('id_paciente' => $id_paciente));
	        return $query->row_array();
		}

		/**
        * 
        */
		public function set_pacientes()
		{
		    $this->load->helper('url');

		    $nombre_completo = $this->input->post('nombre_completo');
		    $edad 		 = $this->input->post('edad');
		    $sexo 		 = $this->input->post('sexo');
		    $grupo 		 = $this->input->post('grupo');
		    $dias_abs    = $this->input->post('dias_abs');
		    $droga 		 = $this->input->post('droga');
		    $t_consumo   = $this->input->post('t_consumo');
		    $droga_ini   = $this->input->post('droga_ini');
		    $edad1con    = $this->input->post('edad1con');
		    $edo_civ     = $this->input->post('edo_civ');
		    $hijos       = $this->input->post('hijos');
		    $escolaridad = $this->input->post('escolaridad');
		    $trabajo     = $this->input->post('trabajo');
		    $creciste_en = $this->input->post('creciste_en');

		    $data = array(
		        'nombre_completo' => $nombre_completo,
		        'edad' => $edad,
		        'sexo' => $sexo,
		        'grupo' => $grupo,
		        'dias_abs' => $dias_abs,
		        'droga' => $droga,
		        't_consumo' => $t_consumo,
		        'droga_ini' => $droga_ini,
		        'edad1con' => $edad1con,
		        'edo_civ' => $edo_civ,
		        'hijos' => $hijos,
		        'escolaridad' => $escolaridad,
		        'trabajo' => $trabajo,
		        'creciste_en' => $creciste_en
		    );

		    $this->db->insert('pacientes', $data);
		    $insert_id = $this->db->insert_id();

   			return  $insert_id;
		}


}