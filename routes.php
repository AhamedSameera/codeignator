<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'Page/error';
$route['come']='Page/model';
$route['display/(:num)'] = 'Page/see/$1';

//Employee 
$route['employee']='Frontend/EmployeeController/index';
$route['employee/add']='Frontend/EmployeeController/create';
$route['employee/store']='Frontend/EmployeeController/store';
$route['employee/edit/(:any)']='Frontend/EmployeeController/edit/$1';
$route['employee/update/(:num)']='Frontend/EmployeeController/update/$1';
$route['employee/delete/(:any)']='Frontend/EmployeeController/delete/$1';
$route['employee/confirmdelete/(:any)']['DELETE']='Frontend/EmployeeController/delete/$1';

//sam
$route['sam']='Frontend/SamController/index';