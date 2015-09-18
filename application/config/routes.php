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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']                 = 'main/login';
$route['subscribe']             = 'subscribe/email_page';
$route['confirm']               = 'subscribe/email_confirm';
$route['users']                 = 'users/all_users';
$route['users/(:num)']          = 'users/all_users/$1';
$route['register']              = 'register/reg';
$route['myprofile']             = 'main/profile';
$route['logout']                = 'main/logout';
$route['change_password']       = 'main/change_pass';
$route['messages']              = 'messages/inbox';
$route['conversation/(:num)']   = 'messages/conversation/$1';
$route['post']                  = 'post/all';
$route['hotlines']              = 'main/hot';
$route['email']                 = 'subscribe/all';
$route['add_post']              = 'post/add_post';
$route['wheather']              = 'main/wheather';
$route['hotline_numbers']       = 'users/hotline';
$route['hazzard']               = 'main/hazzard';
$route['register_ngo']          = 'users/reg_users';
$route['hotline/(:num)']        = 'main/hotline/$1';
$route['hotline']               = 'main/hotline';
$route['hotline_delete/(:num)'] = 'main/hotline_delete/$1';
$route['hazzard_maps']          = 'hazzard/maps';
$route['locator']               = 'main/locator';
$route['delete_user/(:num)']    = 'users/delete/$1';
$route['edit_profile/(:num)']   = 'users/edit_profile/$1';
$route['upload_vid']            = 'post/upload_vid';
$route['delete_map/(:num)']     = 'hazzard/delete_map/$1';
$route['delete_email/(:num)']   = 'subscribe/delete_email/$1';
