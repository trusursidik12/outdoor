<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['aqmdata']		= $this->home_m->get_aqmdata();
		$data['aqmispu']		= $this->home_m->get_aqmispu();
		$data['configuration'] 	= $this->configuration_m->get_aqmconfiguration();
		
		$this->temp_frontend->load('template/template', 'home/home', $data);
	}
}
