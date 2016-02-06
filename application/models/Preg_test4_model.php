<?php
class Preg_test4_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_preg_test4($reg_test4 = FALSE)
		{
	        if ($reg_test4 === FALSE)
	        {
                $query = $this->db->get('preg_test4');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('preg_test4', array('reg_test4' => $reg_test4));
	        return $query->row_array();
		}


}