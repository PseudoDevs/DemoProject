<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/admin/citizen/edit/(:any)', 'Admin/citizenEdit::loadCitizen/$1');
$routes->get('/', 'Login::index');
$routes->add('/signin', 'Login::signin');
$routes->add('/logout', 'Login::logout');
$routes->get('/admin/dashboard', 'Admin/Dashboard::index');
$routes->get('/dashboard/assistancedata', 'Admin/Dashboard::assistanceData');
$routes->get('/dashboard/assistanceBarChart', 'Admin/Dashboard::assistanceBarChart');
$routes->get('/dashboard/guaranteeBarChart', 'Admin/Dashboard::guaranteeBarChart');
$routes->get('/dashboard/educationalBarChart', 'Admin/Dashboard::educationalBarChart');

// users
$routes->add('/admin/users', 'Admin/UserController::index');
$routes->add('/admin/users/new', 'Admin/UserController::userAdd');
$routes->post('/admin/users/add', 'CrudUser::addUser');
$routes->post('/admin/users/update', 'CrudUser::updateUser');
$routes->get('/admin/user/delete/(:any)', 'CrudUser::deleteuser/$1');
$routes->get('/admin/user/edit/(:any)', 'CrudUser::loaduser/$1');
$routes->get('/admin/user/view/(:any)', 'CrudUser::viewuser/$1');
// $routes->get('/admin/user/delete/(:any)/(:any)', 'CrudUser::deleteuser/$1/$2');

// citizen
$routes->add('/admin/citizen', 'Admin/CitizenController::index');
$routes->add('/admin/citizen/new', 'Admin/CitizenController::citizenAdd');
$routes->add('/admin/citizen/add', 'CrudCitizen::addCitizen');
$routes->add('/admin/citizen/update', 'CrudCitizen::updatecitizen');
$routes->get('/admin/citizen/delete/(:any)', 'CrudCitizen::deletecitizen/$1');
$routes->get('/admin/citizen/edit/(:any)', 'CrudCitizen::loadcitizen/$1');
$routes->get('/admin/citizen/view/(:any)', 'CrudCitizen::viewcitizen/$1');

// guarantee-letter
$routes->add('/admin/guarantee-letter', 'Admin/GuaranteeLetterController::index');
$routes->add('/admin/guarantee-letter/new', 'Admin/GuaranteeLetterController::guaranteeAdd');
$routes->post('/admin/guarantee-letter/add', 'CrudGuaranteeLetter::addGuarantee');
$routes->post('/admin/guarantee-letter/update', 'CrudGuaranteeLetter::updateGuarantee');
$routes->get('/admin/guarantee-letter/delete/(:any)', 'CrudGuaranteeLetter::deleteGuarantee/$1');
$routes->get('/admin/guarantee-letter/edit/(:any)', 'CrudGuaranteeLetter::loadGuarantee/$1');
$routes->get('/admin/guarantee-letter/view/(:any)', 'CrudGuaranteeLetter::viewGuarantee/$1');

// guarantee-letter
$routes->add('/admin/educational', 'CrudEducational::index');
$routes->add('/admin/educational/new', 'CrudEducational::guaranteeAdd');
$routes->post('/admin/educational/add', 'CrudEducational::addGuarantee');
$routes->post('/admin/educational/update', 'CrudEducational::updateGuarantee');
$routes->get('/admin/educational/delete/(:any)', 'CrudEducational::deleteGuarantee/$1');
$routes->get('/admin/educational/edit/(:any)', 'CrudEducational::loadGuarantee/$1');
$routes->get('/admin/educational/view/(:any)', 'CrudEducational::viewGuarantee/$1');

// burial
$routes->add('/admin/burial', 'CrudBurial::index');
$routes->post('/admin/burial/add', 'CrudBurial::addBurial');
$routes->add('/admin/burial/new', 'CrudBurial::newBurial');
$routes->post('/admin/burial/update', 'CrudBurial::updateBurial');
$routes->get('/admin/burial/delete/(:any)', 'CrudBurial::deleteBurial/$1');
$routes->get('/admin/burial/edit/(:any)', 'CrudBurial::loadBurial/$1');
$routes->get('/admin/burial/view/(:any)', 'CrudBurial::viewBurial/$1');

// assist
$routes->add('/admin/assist/add', 'CrudAssistance::addAssist');
$routes->get('/admin/citizen/(:any)/assist/add', 'CrudAssistance::addAssistForm/$1');
$routes->get('/admin/assist/delete/(:any)/(:any)', 'CrudAssistance::deleteAssist/$1/$2');
$routes->get('/admin/assist/received/(:any)/(:any)', 'CrudAssistance::receiveAssist/$1/$2');

// AssistanceType
$routes->add('/admin/assist-type/new', 'CrudAssistance::newAssistType');
$routes->post('/admin/assist-type/add', 'CrudAssistance::addAssistType');
$routes->get('/admin/assist-type/edit/(:any)', 'CrudAssistance::editAssistType/$1');
$routes->post('/admin/assist-type/update', 'CrudAssistance::updateAssistanceType');
$routes->get('/admin/assist-type/delete/(:any)', 'CrudAssistance::deleteAssistType/$1');



// $routes->add('/admin/assist/add/testAdd', 'CrudAssistance::index');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
