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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Web
$route['package-page'] = 'Web/package_page';
$route['package-view'] = 'Web/package_view';
$route['about-us'] = 'Web/about_us';
$route['rooms-tariff'] = 'Web/rooms_tariff';
$route['blog'] = 'Web/blog';
$route['blog-view'] = 'Web/blog_view';
$route['gallery'] = 'Web/gallery';
$route['contact'] = 'Web/contact';
$route['package/(:any)'] = 'web/package_list/$1';
//$route['packages/(:any)/(:any)'] = 'web/package_type/$1/$2';
$route['explore/(:num)'] = 'web/explore/$1';

$route['enqury_save'] = 'Web/enqury_save';
$route['contact_save'] = 'Web/contact_save';

// Nirvakam 

$route['nirvakam_create'] = 'Nirvakam/add_nirvakam';
$route['save_nirvakam'] = 'Nirvakam/save_nirvakam';
$route['nirvakam_list'] = 'Nirvakam/nirvakam_list';

$route['nirvakam'] = 'Nirvakam';
$route['admin_loginCheck'] = 'Nirvakam/loginCheck';
$route['Logout'] = 'Nirvakam/Logout';

$route['changepassword'] = 'Nirvakam/changepassword';
$route['save_changepassword'] = 'Nirvakam/save_changepassword';

$route['dashboard'] = 'Dashboard';

$route['package_category'] = 'Package/package_create';
$route['save_create_package'] = 'Package/save_create_package';
$route['get_category_details'] = 'Package/get_category_details';
$route['package_type'] = 'Package/package_type';
$route['save_type_package'] = 'Package/save_type_package';
$route['package'] = 'Package';
$route['package_save'] = 'Package/package_save';
$route['package_update'] = 'Package/package_update';
$route['package_list'] = 'Package/package_list';
$route['package_active_save'] = 'Package/package_active_save';
$route['package_plan_update'] = 'Package/package_plan_update';

$route['enqury_list'] = 'Dashboard/enqury_list';
$route['contact_list'] = 'Dashboard/contact_list';

$route['blog_create'] = 'Blog';
$route['blog_list'] = 'Blog/blog_list';
$route['blog_save'] = 'Blog/blog_save';

$route['gallery_create'] = 'Blog/gallery';
$route['gallery_list'] = 'Blog/gallery_list';
$route['gallery_save'] = 'Blog/gallery_save';

$route['banner_create'] = 'Banner';
$route['banner_list'] = 'Banner/banner_list';
$route['banner_save'] = 'Banner/banner_save';

$route['video'] = 'Banner/video';
$route['video_save'] = 'Banner/video_save';
