<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	public function edit($id = NULL){
		$data['configur'] 		= $this->configuration_m->get_aqmconfiguration($id);
		$data['configuration'] 	= $this->configuration_m->get_aqmconfiguration();
		$data['title'] 			= 'Edit Configuration';

		if(empty($data['configur'])){
			show_404();
		}

		$this->form_validation->set_rules('sta_id', 'Id Stasiun', 'required');

		$this->form_validation->set_message('required', '%s Tidak Boleh Kosong ..');

		if($this->form_validation->run() === FALSE){
			$this->temp_frontend->load('template/template', 'configuration/configuration_form_edit', $data);
		} else {
			$this->configuration_m->update_aqmconfiguration();
			redirect('configuration/1');
		}
	}
}
