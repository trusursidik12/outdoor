<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration_m extends CI_Model {

	public function get_aqmconfiguration($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('aqm_configuration');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_configuration', array('id' => $id));
		return $query->row_array();
	}

	public function update_aqmconfiguration(){
		$data = array(
			'sta_id' 			=> $this->input->post('sta_id'),
			'sta_nama'			=> $this->input->post('sta_nama'),
			'sta_alamat'		=> $this->input->post('sta_alamat'),
			'controller'		=> $this->input->post('controller'),
			'controller_baud'	=> $this->input->post('controller_baud')
		);
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('aqm_configuration', $data);
	}

}