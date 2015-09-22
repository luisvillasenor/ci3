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
		    $edad = $this->input->post('edad');
		    $sexo = $this->input->post('sexo');
		    $grupo = $this->input->post('grupo');

		    $data = array(
		        'nombre_completo' => $nombre_completo,
		        'edad' => $edad,
		        'sexo' => $sexo,
		        'grupo' => $grupo		        
		    );

		    $this->db->insert('pacientes', $data);
		    $insert_id = $this->db->insert_id();

   			return  $insert_id;
		}


}