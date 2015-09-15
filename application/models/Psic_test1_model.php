<?php
class Psic_test1_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_psico_test1($nombre_exp = FALSE)
		{
	        if ( $nombre_exp === FALSE ) {
                $query = $this->db->get('psic_test1');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('psic_test1', array('nombre_exp' => $nombre_exp));
	        return $query->row_array();
		}

		/**
        * 
        */
		public function set_psic_test1($id_preg_test1,$resp_test1,$id_paciente,$status_test1)
		{
		    $this->load->helper('url');

            $data['id_preg_test1'] = $id_preg_test1;
            $data['resp_test1']    = $resp_test1;
            $data['id_paciente']   = $id_paciente;
            $data['status_test1']  = $status_test1;

	    	$this->db->insert('psic_test1', $data);
	    	

            $insert_id = $this->db->insert_id();

			return $insert_id;
		}

        public function calcular_status($id_paciente){

            $this->db->select('sum(status_test1) as suma');
            $this->db->group_by('id_paciente');
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test1', array('id_paciente' => $id_paciente));
            return $query->row_array();
        }


}