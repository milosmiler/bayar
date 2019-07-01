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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['single/(:any)/([a-z]+)'] = 'main/single/$1/$2';
$route['nosotros'] = 'main/nosotros';
$route['contacto'] = 'main/contacto';
$route['aviso-de-privacidad'] = 'main/aviso_privacidad';
$route['admin/logout'] = 'Main/logout';

//Admin
$route['admin'] = 'admin/login';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/proyectos/pagina'] = 'admin/proyectos';
$route['admin/nosotros/pagina'] = 'admin/nosotros';
$route['admin/contacto/pagina'] = 'admin/contacto';
$route['admin/aviso/pagina'] = 'admin/aviso';

$route['admin/proyectos/eventos/listado'] = 'admin/eventos/listado_eventos';
$route['admin/proyectos/eventos/crear'] = 'admin/eventos/crear_eventos';
$route['admin/proyectos/eventos/editar/(:any)'] = 'admin/eventos/editar_eventos/$1';
$route['admin/proyectos/eventos/eliminar/(:any)'] = 'admin/eventos/eliminar_eventos/$1';

$route['admin/proyectos/activaciones/listado'] = 'admin/activaciones/listado_activaciones';
$route['admin/proyectos/activaciones/crear'] = 'admin/activaciones/crear_activaciones';
$route['admin/proyectos/activaciones/editar/(:any)'] = 'admin/activaciones/editar_activaciones/$1';
$route['admin/proyectos/activaciones/eliminar/(:any)'] = 'admin/activaciones/eliminar_activaciones/$1';

$route['admin/proyectos/construcciones/listado'] = 'admin/construcciones/listado_construcciones';
$route['admin/proyectos/construcciones/crear'] = 'admin/construcciones/crear_construcciones';
$route['admin/proyectos/construcciones/editar/(:any)'] = 'admin/construcciones/editar_construcciones/$1';
$route['admin/proyectos/construcciones/eliminar/(:any)'] = 'admin/construcciones/eliminar_construcciones/$1';

$route['admin/proyectos/tecnologia/listado'] = 'admin/tecnologia/listado_tecnologia';
$route['admin/proyectos/tecnologia/crear'] = 'admin/tecnologia/crear_tecnologia';
$route['admin/proyectos/tecnologia/editar/(:any)'] = 'admin/tecnologia/editar_tecnologia/$1';
$route['admin/proyectos/tecnologia/eliminar/(:any)'] = 'admin/tecnologia/eliminar_tecnologia/$1';

$route['admin/proyectos/tacticas/listado'] = 'admin/tacticas/listado_tacticas';
$route['admin/proyectos/tacticas/crear'] = 'admin/tacticas/crear_tacticas';
$route['admin/proyectos/tacticas/editar/(:any)'] = 'admin/tacticas/editar_tacticas/$1';
$route['admin/proyectos/tacticas/eliminar/(:any)'] = 'admin/tacticas/eliminar_tacticas/$1';

$route['admin/proyectos/contenidos/listado'] = 'admin/contenidos/listado_contenidos';
$route['admin/proyectos/contenidos/crear'] = 'admin/contenidos/crear_contenidos';
$route['admin/proyectos/contenidos/editar/(:any)'] = 'admin/contenidos/editar_contenidos/$1';
$route['admin/proyectos/contenidos/eliminar/(:any)'] = 'admin/contenidos/eliminar_contenidos/$1';
