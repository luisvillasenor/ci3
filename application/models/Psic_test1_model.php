<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Psicometria Web App - Psicometria del Test1 Model
 *
 * Psicometria Web App es una aplicación web para CodeIgniter 3
 *
 * @package     Psicometria Web App
 * @author      Luis G. Villaseñor
 * @copyright   Copyright (c) 2015, Luis G. Villaseñor. (http://luisgvillasenor.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://luisgvillasenor.com/ci3
 */

class Psic_test1_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            
            $this->load->database();
        }

        public function get_test1($id_expediente = FALSE)
        {
            if ($id_expediente === FALSE)
            {
                $query = $this->db->get('psic_test1');
                return $query->result_array();
            }
            
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test1', array('id_expediente' => $id_expediente));
            if ( $query->num_rows() == 1 )
            {
                // return $query->row(); // Devuelve el registro en forma de Objeto
                return $query->row_array(); // Devuelve el registro en forma de Arreglo
            }
            
            return FALSE;

        }

        /**
        * 
        */
        public function get_status_test1( $id_expediente )
        {
            $result = '';
            $this->db->select('status_test1');
            $this->db->where('id_expediente',$id_expediente);
            $query = $this->db->get('psic_test1');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            foreach ($query as $key => $value) {
                if ($key == 'status_test1') {
                    $result = $value;
                }                
            }
            return $result;
        }

        public function get_avance_test1($id_expediente)
        {
            $this->db->select('avance');
            $this->db->where('id_expediente',$id_expediente);
            $this->db->limit(1);
            $query = $this->db->get('psic_test1');
            if ( empty($query) ) {                
                return $result = NULL;
            }
            return $query->row_array();
        }

		/**
        * 
        */
		public function set_psic_test1($resp_test1)
		{
		    $this->load->helper('url');

            $this->db->insert('psic_test1', $resp_test1);
	    	
            $insert_id = $this->db->insert_id();

			return $insert_id;
		}

        public function calificacion($insert_id){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('
                (resp_test1_1 +
                 resp_test1_2 +
                 resp_test1_3 +
                 resp_test1_4 +
                 resp_test1_5 +
                 resp_test1_6 +
                 resp_test1_7 +
                 resp_test1_8 +
                 resp_test1_9 +
                 resp_test1_10 +
                 resp_test1_11) as calificacion');
            
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test1', array('id' => $insert_id));
            if ( $query->num_rows() == 1 )
            {
                // return $query->row(); // Devuelve el registro en forma de Objeto
                return $query->row_array(); // Devuelve el registro en forma de Arreglo
            }
            
            return FALSE;

        }

        public function update_calificacion($calificacion,$insert_id){
            $this->load->helper('url');
            $data = array(
                    'calificacion' => $calificacion
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test1',$data);
        }

        public function avance($insert_id,$val_max,$calificacion){
            if ( $insert_id === FALSE ) {
                show_404();
            }

            $this->db->select('('.$calificacion.'/'.$val_max.') as avance');
           
            $this->db->limit(1);
            $query = $this->db->get_where('psic_test1', array('id' => $insert_id));
            return $query->row_array();
        }

        public function update_avance($avance,$insert_id){
            $this->load->helper('url');
            $data = array(
                'avance' => $avance                
            );
            $this->db->where('id', $insert_id);
            $query = $this->db->update('psic_test1', $data);
        }

}