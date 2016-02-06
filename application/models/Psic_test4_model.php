<?php
class Psic_test4_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
            
        }

        public function get_test4($id_expediente = FALSE)
        {
            if ($id_expediente === FALSE)
            {
                $query = $this->db->get('psic_test4');
                return $query->result_array();
            }

            $query = $this->db->get_where('psic_test4', array('id_expediente' => $id_expediente));
            return $query->row_array();
        }

        /**
        * 
        */
        public function get_status_test4( $id_expediente )
        {
            $result = '';
            $this->db->select('status_test4');
            $this->db->where('id_expediente',$id_expediente);
            $query = $this->db->get('psic_test4');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            foreach ($query as $key => $value) {
                if ($key == 'status_test4') {
                    $result = $value;
                }                
            }
            return $result;
        }

        public function get_avance_test4($id_expediente)
        {
            $this->db->select('avance');
            $this->db->where('id_expediente',$id_expediente);
            $this->db->limit(1);
            $query = $this->db->get('psic_test4');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            return $query->row_array();
        }

		/**
        * 
        */
		public function set_psic_test4($resp_test4)
		{
		    $this->load->helper('url');

            $this->db->insert('psic_test4', $resp_test4);
	    	
            $insert_id = $this->db->insert_id();

			return $insert_id;
		}

        public function neurosis($insert_id){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('
                (resp_test4_1 +
                 resp_test4_2 +
                 resp_test4_3 +
                 resp_test4_4 +
                 resp_test4_5 +
                 resp_test4_6 +
                 resp_test4_7 +
                 resp_test4_8 +
                 resp_test4_9 +
                 resp_test4_10 +
                 resp_test4_11 +
                 resp_test4_12 +
                 resp_test4_13 +
                 resp_test4_14 +
                 resp_test4_15 +
                 resp_test4_16) as neurosis');
            
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test4', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_calificacion($neurosis,$insert_id){
            $this->load->helper('url');
            $data = array(
                    'neurosis' => $neurosis
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test4',$data);
        }

        public function avance($insert_id,$val_max,$neurosis){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('('.$neurosis.'/'.$val_max.') as avance');
           
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test4', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_avance($avance,$insert_id){
            $this->load->helper('url');
            $data = array(
                'avanceneurosis' => $avance                
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test4', $data);
        }

}