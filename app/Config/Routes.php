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
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);

$routes->setAutoRoute(true);

//users routes
$routes->get('/', 'Users::index', ['filter' => 'noauth']);
$routes->post('/login', 'Users::loginuser');
$routes->get('/users-list', 'Users::list',['filter' => 'auth']);
$routes->match(['get','post'],'/register', 'Users::register',['as' => 'register']);
$routes->match(['get','post'],'profile', 'Users::profile',['filter' => 'auth']);
$routes->get('dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('logout', 'Users::logout');
 
//polling stations route
$routes->get('polling-stations', 'PollingStation::index',['filter' => 'auth']);
$routes->match(['get','post'],'/create-polling-satation', 'PollingStation::create',['filter' => 'auth']);
$routes->match(['get','post'],'/save', 'PollingStation::store');
$routes->get('polling-station/edit/(:any)', 'PollingStation::edit/$1',['filter' => 'auth']);
$routes->post('polling-station/update', 'PollingStation::update/$1',['filter' => 'auth']);
$routes->get('polling-station/delete/(:any)', 'PollingStation::delete/$1',['filter' => 'auth']);
//membertypes route
$routes->get('membertypes', 'MemberType::index',['filter' => 'auth']);
$routes->get('/membertype-create', 'MemberType::create',['filter' => 'auth']);
$routes->match(['get','post'],'/membertype/save', 'MemberType::store');
$routes->get('membertype/edit/(:any)', 'MemberType::edit/$1',['filter' => 'auth']);
$routes->post('/membertype/update', 'MemberType::update/',['filter' => 'auth']);
$routes->get('membertype/delete/(:any)', 'MemberType::delete/$1',['filter' => 'auth']);


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
  