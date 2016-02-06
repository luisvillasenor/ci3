<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Psicometria Web App - Expedientes Model
 *
 * Psicometria Web App es una aplicación web para CodeIgniter 3
 *
 * @package     Psicometria Web App
 * @author      Luis G. Villaseñor
 * @copyright   Copyright (c) 2015, Luis G. Villaseñor. (http://luisgvillasenor.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://luisgvillasenor.com/ci3
 */

class Expedientes_model extends CI_Model {

	/**
	 * Class Constructor
	 */
    public function __construct()
    {
		parent::__construct();

        $this->load->database();
        define("TABLA", "expedientes");
    }

	// --------------------------------------------------------------

    /**
    * 
    */
    public function get_expedientes($id_expediente = FALSE)
	{
        if ($id_expediente === FALSE)
        {
            $query = $this->db->get(TABLA);
            return $query->result_array();
        }

        $this->db->limit(1);
        $query = $this->db->get_where(TABLA, array('id_expediente' => $id_expediente));

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
		public function set_expedientes($id_paciente,$miembro,$aplicador)
		{
		    $this->load->helper('url');
		    $data = array(
		        'miembro' => $miembro,
		        'id_paciente' => $id_paciente,
		        'aplicador' => $aplicador,		        
		        'fecha_alta' => date('Y-m-d H:i:s'),
		        'fecha_ult_acc' => date('Y-m-d H:i:s')
		    );
		    $this->db->insert(TABLA, $data);
		    $id_expediente = $this->db->insert_id();
   			return  $id_expediente;
		}

		public function update_status_test1($id_expediente,$avance_test1)
		{
		    $this->load->helper('url');
		    $data = array(
		        'fecha_ult_acc' => date('Y-m-d H:i:s'),
		        'status_test1' => $avance_test1
		    );
		    $this->db->where('id_expediente', $id_expediente);
        	$this->db->update(TABLA, $data);
        	$this->update_status_exp($id_expediente,$avance_test1);
		}
		public function update_status_test3($id_expediente,$avance_test3)
		{
		    
		    $data = array(
		        'fecha_ult_acc' => date('Y-m-d H:i:s'),
		        'status_test3' => $avance_test3
		    );
		    $this->db->where('id_expediente', $id_expediente);
        	$this->db->update(TABLA, $data);
        	$this->update_status_exp($id_expediente,$avance_test1);
		}
		public function update_status_test4($id_expediente,$avance_test4)
		{
		    $this->load->helper('url');
		    $data = array(
		        'fecha_ult_acc' => date('Y-m-d H:i:s'),
		        'status_test4' => $avance_test4
		    );
		    $this->db->where('id_expediente', $id_expediente);
        	$this->db->update(TABLA, $data);
        	$this->update_status_exp($id_expediente,$avance_test4);
		}

		public function update_status_exp($id_expediente,$avance_test1)
		{
		    $this->load->helper('url');
		    $data = array(
		        'fecha_ult_acc' => date('Y-m-d H:i:s'),
		        'status_exp' => $avance_test1
		    );
		    $this->db->where('id_expediente', $id_expediente);
        	$this->db->update(TABLA, $data);
		}

}