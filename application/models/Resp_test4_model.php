<?php
class Resp_test4_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_resp_test4($reg_test4 = FALSE)
		{
	        if ($reg_test4 === FALSE)
	        {
                //$this->db->order_by('valor','desc');
                $query = $this->db->get('resp_test4');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('resp_test4', array('reg_test4' => $reg_test4));
	        return $query->row_array();
		}


}