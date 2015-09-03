<?php
class Expedientes_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        /**
        * 
        */
        public function get_expedientes($nombre_exp = FALSE)
		{
	        if ($nombre_exp === FALSE)
	        {
                $query = $this->db->get('expedientes');
                return $query->result_array();
	        }

	        $query = $this->db->get_where('expedientes', array('nombre_exp' => $nombre_exp));
	        return $query->row_array();
		}

		/**
        * 
        */
		public function set_news()
		{
		    $this->load->helper('url');

		    $nombre_exp = url_title($this->input->post('title'), 'dash', TRUE);

		    $data = array(
		        'title' => $this->input->post('title'),
		        'nombre_exp' => $nombre_exp,
		        'text' => $this->input->post('text')
		    );

		    return $this->db->insert('news', $data);
		}


}