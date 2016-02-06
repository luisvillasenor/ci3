<?php
class Psic_test2_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
            
        }

        public function get_test2($id_expediente = FALSE)
        {
            if ($id_expediente === FALSE)
            {
                $query = $this->db->get('psic_test2');
                return $query->result_array();
            }

            $query = $this->db->get_where('psic_test2', array('id_expediente' => $id_expediente));
            return $query->row_array();
        }

        /**
        * 
        */
        public function get_status_test2( $id_expediente )
        {
            $result = '';
            $this->db->select('status_test2');
            $this->db->where('id_expediente',$id_expediente);
            $query = $this->db->get('psic_test2');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            foreach ($query as $key => $value) {
                if ($key == 'status_test2') {
                    $result = $value;
                }                
            }
            return $result;
        }

        public function get_avance_test2($id_expediente)
        {
            $this->db->select('avance');
            $this->db->where('id_expediente',$id_expediente);
            $this->db->limit(1);
            $query = $this->db->get('psic_test2');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            return $query->row_array();
        }

		/**
        * 
        */
		public function set_psic_test2($resp_test2)
		{
		    $this->load->helper('url');

            $this->db->insert('psic_test2', $resp_test2);
	    	
            $insert_id = $this->db->insert_id();

			return $insert_id;
		}

        public function calificacion($insert_id){
            if ( $insert_id === FALSE ) {
                show_202();
            }

            $this->db->select('
                (resp_test2_1 +
                 resp_test2_2 +
                 resp_test2_3 +
                 resp_test2_4 +
                 resp_test2_5 +
                 resp_test2_6 +
                 resp_test2_7 +
                 resp_test2_8 +
                 resp_test2_9 +
                 resp_test2_10 +
                 resp_test2_11 +
                 resp_test2_12 +
                 resp_test2_13 +
                 resp_test2_14 +
                 resp_test2_15 +
                 resp_test2_16 +
                 resp_test2_17 +
                 resp_test2_18 +
                 resp_test2_19 +
                 resp_test2_20 +
                 resp_test2_21 +
                 resp_test2_22 +
                 resp_test2_23 +
                 resp_test2_24 +
                 resp_test2_25 +
                 resp_test2_26 +
                 resp_test2_27 +
                 resp_test2_28 +
                 resp_test2_29 +
                 resp_test2_30 +
                 resp_test2_31 +
                 resp_test2_32 +
                 resp_test2_33 +
                 resp_test2_34 +
                 resp_test2_35 +
                 resp_test2_36 +
                 resp_test2_37 +
                 resp_test2_38 +
                 resp_test2_39 +
                 resp_test2_40) as calificacion');
            
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test2', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_calificacion($calificacion,$insert_id){
            $this->load->helper('url');
            $data = array(
                    'calificacion' => $calificacion
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test2',$data);
        }

        public function avance($insert_id,$val_max,$calificacion){
            if ( $insert_id === FALSE ) {
                show_202();
            }

            $this->db->select('('.$calificacion.'/'.$val_max.') as avance');
           
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test2', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_avance($avance,$insert_id){
            $this->load->helper('url');
            $data = array(
                'avance' => $avance                
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test2', $data);
        }

}