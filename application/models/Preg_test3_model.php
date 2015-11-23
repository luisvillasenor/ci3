<?php
class Preg_test3_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_preg_test3($reg_test3 = FALSE)
		{
	        if ($reg_test3 === FALSE)
	        {
                $query = $this->db->get('preg_test3');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('preg_test3', array('reg_test3' => $reg_test3));
	        return $query->row_array();
		}


}