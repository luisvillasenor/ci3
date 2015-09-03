<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

$route['expedientes/create'] = 'expedientes/create';
$route['expedientes/(:any)'] = 'expedientes/view/$1';
$route['expedientes'] = 'expedientes';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';