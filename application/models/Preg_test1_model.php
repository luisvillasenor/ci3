<?php
class Preg_test1_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_preg_test1($reg_test1 = FALSE)
		{
	        if ($reg_test1 === FALSE)
	        {
                $query = $this->db->get('preg_test1');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('preg_test1', array('reg_test1' => $reg_test1));
	        return $query->row_array();
		}


}