<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['configuration/(:any)']	= 'configuration/edit/$1';

$route['default_controller'] 	= 'home';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
