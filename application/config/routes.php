<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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

$route['directores/(:any)'] = "directed_controller/single_directed_view/$1";
$route['directores'] = "directed_controller/directed";
$route['movie/(:any)'] = "home_controller/movie_view/$1";


$route['admin/slider'] = "admin_slider_ci/slider";
$route['admin/images/(:any)'] = "admin_movie_ci/movie_image/$1";

/** category route */
$route['app/admin/categories'] = "category_controller/show";
$route['app/admin/categories/create'] = "category_controller/create";

/** movies route */
$route['app/admin/movies'] = "movie_controller/show";
$route['app/admin/movies/create'] = "movie_controller/create";

$route['app/admin/dashboard'] = "admin_dashboard_ci/dashboard";

$route['default_controller'] = "home_controller";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */