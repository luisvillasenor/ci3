<?php
class Resp_test3_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_resp_test3($reg_test3 = FALSE)
		{
	        if ($reg_test3 === FALSE)
	        {
                //$this->db->order_by('valor','desc');
                $query = $this->db->get('resp_test3');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('resp_test3', array('reg_test3' => $reg_test3));
	        return $query->row_array();
		}


}