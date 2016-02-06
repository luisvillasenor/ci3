<?php
class Resp_test1_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_resp_test1($reg_test1 = FALSE)
		{
	        if ($reg_test1 === FALSE)
	        {
                         $this->db->order_by('valor','desc');
                $query = $this->db->get('resp_test1');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('resp_test1', array('reg_test1' => $reg_test1));
	        return $query->row_array();
		}


}