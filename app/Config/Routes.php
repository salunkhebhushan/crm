<?php

namespace Config;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//Employees
//$routes->get('/', 'Employee::index');
$routes->get('/', 'Employees::index');
$routes->get('/Employees/emp_form', 'Employee::emp_form');
$routes->post('/Employees/emp_add','Employee::emp_form');
$routes->post('/Employees/emp_insert','Employee::emp_insert');
$routes->get('/Employees/delete/(:num)', 'Employee::delete/$1');
$routes->get('/Employees/edit/(:num)', 'Employee::edit/$1');
$routes->post('/Employees/update/(:num)', 'Employee::update/$1');
$routes->get('/Employees/emp_profile/(:num)', 'Employee::emp_profile/$1');

//Employees
//$routes->get('/', 'Employee::index');
$routes->get('/', 'Empcategory1::index');
$routes->post('/Category/category_add', 'Empcategory1::category_add');
$routes->get('/Category/category_form','Empcategory1::category_form');
// $routes->post('/Category/category_add','Empcategory1::category_add');
// $routes->get('/Category/delete/(:num)', 'Empcategory1::delete/$1');
// $routes->get('/Category/edit/(:num)', 'Empcategory1::edit/$1');
// $routes->post('/Category/update/(:num)', 'Empcategory1::update/$1');
// $routes->get('/Category/emp_profile/(:num)', 'Empcategory1::emp_profile/$1');


//Client 
 
$routes->get('/', 'Client::index');
$routes->get('/Cnt/cnt_form', 'Client::cnt_form');
$routes->post('/Cnt/cnt_add','Client::cnt_form');
$routes->get('/Cnt/delete/(:num)', 'Client::delete/$1');
$routes->get('/Cnt/edit/(:num)', 'Client::edit/$1');
$routes->post('/Cnt/update/(:num)', 'Client::update/$1');

//Project 
 
$routes->get('/', 'Project::index');
$routes->get('/Pro/pro_form', 'Project::pro_form');
$routes->post('/Pro/pro_add','Project::pro_form');
$routes->get('/Pro/delete/(:num)', 'Project::delete/$1');
$routes->get('/Pro/edit/(:num)', 'Project::edit/$1');
$routes->post('/Pro/update/(:num)', 'Project::update/$1');
$routes->post('/search_client', 'Project::search_client');




//Equipments 
 
$routes->get('/', 'Equipment::index');
$routes->get('/Te/te_form', 'Equipment::te_form');
$routes->post('/Te/te_add','Equipment::te_add');
$routes->get('/Te/delete/(:num)', 'Equipment::delete/$1');
$routes->get('/Te/edit/(:num)', 'Equipment::edit/$1');
$routes->post('/Te/update/(:num)', 'Equipment::update/$1');


//Subcontractor 

$routes->get('/', 'Subcontractor::index');
$routes->get('/Sub/sub_form', 'Subcontractor::sub_form');
$routes->post('/Sub/sub_add','Subcontractor::sub_form');
$routes->get('/Sub/delete/(:num)', 'Subcontractor::delete/$1');
$routes->get('/Sub/edit/(:num)', 'Subcontractor::edit/$1');
$routes->post('/Sub/update/(:num)', 'Subcontractor::update/$1');



//Subcontractor activities 

$routes->get('/', 'Subactivities::index');
$routes->get('/Activities/activities_form', 'Subactivities::activities_form');
$routes->post('/Activities/activities_add','Subactivities::activities_form');
$routes->get('/Activities/delete/(:num)', 'Subactivities::delete/$1');
$routes->get('/Activities/edit/(:num)', 'Subactivities::edit/$1');
$routes->post('/Activities/update/(:num)', 'Subactivities::update/$1');


//$routes->get('/Employees/emp_profile/(:num)', 'Client::cnt_profile/$1');

/*
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
