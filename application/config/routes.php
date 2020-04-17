<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['api/get/cemsdata']			= 'api/cemsdata';

$route['api/add/cemsdata']			= 'cemsdata/cems';

$route['default_controller']		= 'api';
$route['404_override']				= '';
$route['translate_uri_dashes']		= FALSE;
