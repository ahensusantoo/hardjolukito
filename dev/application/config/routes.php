<?php
defined('BASEPATH') OR exit('No direct script access allowed');

global $SConfig;

$route['default_controller'] = $SConfig->_first_page;

// BAGIAN FRONTEND
	$route['list-katalog-theme'] = 'frontend/katalog';


// BAGIAN ADMIN
	$route['login'] = 'admin/auth';
	$route['admin'] = 'admin/auth';
	$route['dashboard'] = 'admin/dashboard';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
