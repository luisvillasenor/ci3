<?php
class Preg_test2_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_preg_test2($reg_test2 = FALSE)
		{
	        if ($reg_test2 === FALSE)
	        {
                $query = $this->db->get('preg_test2');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('preg_test2', array('reg_test2' => $reg_test2));
	        return $query->row_array();
		}


}