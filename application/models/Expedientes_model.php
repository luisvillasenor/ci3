<?php
class Expedientes_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
            define("TABLA", "expedientes");
        }

        /**
        * 
        */
        public function get_expedientes($id_expediente = FALSE)
		{
	        if ($id_expediente === FALSE)
	        {
                $query = $this->db->get(TABLA);
                return $query->result_array();
	        }

	        $query = $this->db->get_where(TABLA, array('id_expediente' => $id_expediente));
	        return $query->row_array();
		}

		/**
        * 
        */
		public function set_expedientes($id_paciente,$miembro,$aplicador)
		{
		    $this->load->helper('url');
		    $data = array(
		        'miembro' => $miembro,
		        'id_paciente' => $id_paciente,
		        'aplicador' => $aplicador,		        
		        'fecha_alta' => date('Y-m-d H:i:s'),
		        'fecha_ult_acc' => date('Y-m-d H:i:s')
		    );
		    $this->db->insert(TABLA, $data);
		    $id_expediente = $this->db->insert_id();
   			return  $id_expediente;
		}

		public function update_status_test1($id_expediente,$avance_test1)
		{
		    $this->load->helper('url');
		    $data = array(
		        'fecha_ult_acc' => date('Y-m-d H:i:s'),
		        'status_test1' => $avance_test1
		    );
		    $this->db->where('id_expediente', $id_expediente);
        	$this->db->update(TABLA, $data);
        	$this->update_status_exp($id_expediente,$avance_test1);
		}

		public function update_status_exp($id_expediente,$avance_test1)
		{
		    $this->load->helper('url');
		    $data = array(
		        'fecha_ult_acc' => date('Y-m-d H:i:s'),
		        'status_exp' => $avance_test1
		    );
		    $this->db->where('id_expediente', $id_expediente);
        	$this->db->update(TABLA, $data);
		}

}