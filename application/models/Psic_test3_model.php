<?php
class Psic_test3_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
            
        }

        public function get_test3($id_expediente = FALSE)
        {
            if ($id_expediente === FALSE)
            {
                $query = $this->db->get('psic_test3');
                return $query->result_array();
            }

            $query = $this->db->get_where('psic_test3', array('id_expediente' => $id_expediente));
            return $query->row_array();
        }

        /**
        * 
        */
        public function get_status_test3( $id_expediente )
        {
            $result = '';
            $this->db->select('status_test3');
            $this->db->where('id_expediente',$id_expediente);
            $query = $this->db->get('psic_test3');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            foreach ($query as $key => $value) {
                if ($key == 'status_test3') {
                    $result = $value;
                }                
            }
            return $result;
        }

        public function get_avance_test3($id_expediente)
        {
            $this->db->select('avance');
            $this->db->where('id_expediente',$id_expediente);
            $this->db->limit(1);
            $query = $this->db->get('psic_test3');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            return $query->row_array();
        }

		/**
        * 
        */
		public function set_psic_test3($resp_test3)
		{
		    $this->db->insert('psic_test3', $resp_test3);
	    	
            $insert_id = $this->db->insert_id();

			return $insert_id;
		}

        public function ansiedad($insert_id){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('
                (resp_test3_1 +
                 resp_test3_3 +
                 resp_test3_5 +
                 resp_test3_7 +
                 resp_test3_9 +
                 resp_test3_11 +
                 resp_test3_13) as ansiedad');
            
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test3', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_ansiedad($ansiedad,$insert_id){
            $this->load->helper('url');
            $data = array(
                    'ansiedad' => $ansiedad
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test3',$data);
        }

        public function avance_ansiedad($insert_id,$val_max,$ansiedad){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('('.$ansiedad.'/'.$val_max.') as avance');
           
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test3', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_avance_ansiedad($avanceansiedad,$insert_id){
            $this->load->helper('url');
            $data = array(
                'avanceansiedad' => $avanceansiedad                
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test3', $data);
        }




        public function depresion($insert_id){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('
                (resp_test3_2 +
                 resp_test3_4 +
                 resp_test3_6 +
                 resp_test3_8 +
                 resp_test3_10 +
                 resp_test3_12 +
                 resp_test3_14) as depresion');
            
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test3', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_depresion($depresion,$insert_id){
            $this->load->helper('url');
            $data = array(
                    'depresion' => $depresion
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test3',$data);
        }

        public function avance_depresion($insert_id,$val_max,$depresion){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('('.$depresion.'/'.$val_max.') as avance');
           
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test3', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_avance_depresion($avancedepresion,$insert_id){
            $this->load->helper('url');
            $data = array(
                'avancedepresion' => $avancedepresion                
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test3', $data);
        }

}