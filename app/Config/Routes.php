<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Usuario');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'users/create', 'Usuario::create');
$routes->match(['get', 'post'], '/valoracion', 'Valoracion::insertarValoracion');
$routes->match(['get', 'post'], '/comentario/guardarComentarios', 'Comentario::guardarComentarios');
$routes->get('valoracion/datos/(:segment)', 'Valoracion::obtenerValoracion/$1');
$routes->get('users/(:segment)', 'Usuario::view/$1');
$routes->get('usuario', 'Usuario::index');
$routes->get('usuario/perfil', 'Usuario::perfil');
$routes->get('producto', 'Producto::index');
$routes->get('productos/(:segment)', 'Producto::view/$1');
$routes->get('seccion/(:segment)', 'Seccion::index/$1');
$routes->get('home', 'Home::index');
$routes->get('home/pruebas', 'Home::pruebas');  #Eliminar al terminar proyecto

$routes->group('user', function($routes)
{
	$routes->resource('Usuario');
  //    $routes->get('altaUsuario', 'AltaUsuario::index');
  //	$routes->get('altaUsuario/consulta', 'AltaUsuario::consulta');
  //	$routes->get('altaUsuario/create', 'AltaUsuario::create');
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
