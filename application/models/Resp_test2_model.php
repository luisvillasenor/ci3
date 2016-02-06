<?php
class Resp_test2_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_resp_test2($reg_test2 = FALSE)
		{
	        if ($reg_test2 === FALSE)
	        {
                //$this->db->order_by('valor','desc');
                $query = $this->db->get('resp_test2');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('resp_test2', array('reg_test2' => $reg_test2));
	        return $query->row_array();
		}


}