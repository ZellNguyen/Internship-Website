<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['internship/database'] = 'cintern/showDB';
$route['internship/reg/(:any)'] = 'cintern/reg_of_intern/$1';
$route['internship/create'] = 'cintern/create';
$route['internship/edit/(:any)'] = 'cintern/edit/$1';
$route['internship/delete/(:any)'] = 'cintern/delete/$1';
$route['internship/make-visible/(:any)'] = 'cintern/visible/$1';
$route['internship/make-invisible/(:any)'] = 'cintern/invisible/$1';
$route['internship/deregister/(:any)/(:any)/(:any)/(:any)'] = 'cintern/deregister/$1/$2/$3/$4';
$route['internship/register/(:any)/(:any)/(:any)/(:any)'] = 'cintern/register/$1/$2/$3/$4';
$route['internship/hidden'] = 'cintern/hidden';
$route['internship/(:any)'] = 'cintern/view/$1';
$route['internship'] = 'cintern';


$route['company/create'] = 'ccompany/create';
$route['company/hidden'] = 'ccompany/hidden';
$route['company/database'] = 'ccompany/showDB';
$route['company/make-visible/(:any)'] = 'ccompany/visible/$1';
$route['company/make-invisible/(:any)'] = 'ccompany/invisible/$1';
$route['company/delete/(:any)'] = 'ccompany/delete/$1';
$route['company/edit/(:any)'] = 'ccompany/edit/$1';
$route['company/(:any)'] = 'ccompany/view/$1';
$route['company'] = 'ccompany';

$route['about'] = 'chome/about';
$route['homepage'] = 'chome';
$route['account/(:any)'] = 'cusercrud/myprofile/$1';
$route['edit/(:any)'] = 'cusercrud/edit/$1';
$route['dashboard'] = 'chome/dashboard';
$route['default_controller'] = "welcome";
$route['404_override'] = '';

/*$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */