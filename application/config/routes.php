<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'user/C_landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Admin
// Login session
$route['login'] = 'admin/C_login';
$route['login/(:any)'] = 'admin/C_login/$1';
$route['auth'] = 'admin/C_auth';
// Signup session
$route['signup'] = 'C_signup/index';
// Dashboard session
$route['admin/index'] = 'admin/C_dashboard';
// Operator session
$route['operator'] = 'admin/C_operator';
$route['operator/(:any)'] = 'admin/C_operator/$1';
$route['operator/(:any)/(:num)'] = 'admin/C_operator/$1/$2';
// Product session
$route['product'] = 'admin/C_product';
$route['product/(:any)'] = 'admin/C_product/$1';
$route['product/(:any)/(:num)'] = 'admin/C_product/$1/$2';

// User
// Article
$route['article'] = 'user/C_article';
$route['article/(:any)'] = 'user/C_article/$1';
// Bussiness Page
$route['bussiness'] = 'user/C_bisnispage';
$route['bussiness/(:any)'] = 'user/C_bisnispage/$1';
$route['bussiness/(:any)/(:num)'] = 'user/C_bisnispage/$1/$2';

$route['homepage/index'] = 'user/C_homepage';
$route['category'] = 'user/C_kategori';
$route['listcategories'] = 'user/C_listkategori';
$route['tours'] = 'user/C_optour';
// Show offer
$route['offer'] = 'user/C_showoffer';
$route['offer/(:any)'] = 'user/C_showoffer/$1';
$route['offer/(:any)/(:num)'] = 'user/C_showoffer/$1/$2';