<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/index';
$route['404_override'] = 'errors/page_missing';
$route['translate_uri_dashes'] = FALSE;



// admin controllers
$route['admin/dashboard'] = 'Admin/Dashboardcontroller/index';
$route['admin/dashboard/addassets'] = 'Admin/Dashboardcontroller/addassets';
$route['admin/dashboard/insertassets'] = 'Admin/Dashboardcontroller/insertassets';


// for edit and delete take a right side 
// edit or delete ke liye right side lo
$route['admin/dashboard/delete'] = 'Admin/Dashboardcontroller/delete';
$route['update/{id}']='Admin/Dashboardcontroller/update';
