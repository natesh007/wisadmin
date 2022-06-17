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
$routes->setDefaultNamespace('Modules\WIS\Controllers');
$routes->setDefaultController('Home');
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
//Common
$routes->add('/', 'Home::index');
$routes->add('/', 'Home::index',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/login', 'Home::login',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/dashboard', 'Home::dashboard',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/hospitalSelection', 'Home::hospitalSelection',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/checklistSubDetails', 'Home::checklistSubDetails',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/checklist', 'Home::checklist',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/checklistDetails', 'Home::checklistDetails',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineering', 'Home::engineering',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineeringWater', 'Home::engineeringWater',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineeringEnergy', 'Home::engineeringEnergy',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineeringAirConditioning', 'Home::engineeringAirConditioning',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineeringAirQuality', 'Home::engineeringAirQuality',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineeringSoftIntegration', 'Home::engineeringSoftIntegration',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/engineeringSpecializedSolutions', 'Home::engineeringSpecializedSolutions',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/machinery', 'Home::machinery',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/machineryDetails', 'Home::machineryDetails',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/resources', 'Home::resources',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/sanitation', 'Home::sanitation',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/sanitationWasteManagement', 'Home::sanitationWasteManagement',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/sanitationPestControl', 'Home::sanitationPestControl',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/sanitationFaceCleaning', 'Home::sanitationFaceCleaning',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/sanitationWashroomDetails', 'Home::sanitationWashroomDetails',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/sanitationWashroomFullDetails', 'Home::sanitationWashroomFullDetails',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/attendence', 'Home::attendence',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/attendenceDeptDetail', 'Home::attendenceDeptDetail',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/attendenceCustomDate', 'Home::attendenceCustomDate',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/listView', 'Home::listView',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/ppm', 'Home::ppm',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/amc', 'Home::amc',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/amcObservations', 'Home::amcObservations',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/amcRecommendations', 'Home::amcRecommendations',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintFeedback', 'Home::complaintFeedback',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintDashboard', 'Home::complaintDashboard',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintList', 'Home::complaintList',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintAttendence', 'Home::complaintAttendence',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintDetReports', 'Home::complaintDetReports',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintCReports', 'Home::complaintCReports',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/bedsOccupancy', 'Home::bedsOccupancy',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/bedsOccupancyDetails', 'Home::bedsOccupancyDetails',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/manpowerUtilization', 'Home::manpowerUtilization',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/inventoryManagement', 'Home::inventoryManagement',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/repairMaintenance', 'Home::repairMaintenance',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/billingSoftware', 'Home::billingSoftware',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/audits', 'Home::audits',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/auditObservations', 'Home::auditObservations',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/auditRecommendations', 'Home::auditRecommendations',['namespace' => 'Modules\WIS\Controllers']);
//$routes->add('/engineering', 'Engineering::engineering',['namespace' => 'Modules\WIS\Controllers']);




$routes->add('/admin', 'Admin::index',['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/login', 'Admin::index',['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/logout', 'Admin::logout',['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/users', 'Admin::users',['namespace' => 'Modules\Admin\Controllers']);

//Admin Common Routes  
$routes->add('/admin/activate_inactivate', 'Admin::activate_inactivate', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/delete', 'Admin::delete', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/delete_all', 'Admin::delete_all', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/active_inactive_all', 'Admin::active_inactive_all', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/changerowpriority', 'Admin::changerowpriority', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/common_form_validation', 'Admin::common_form_validation', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/common_edit_form_validation', 'Admin::common_edit_form_validation', ['namespace' => 'Modules\Admin\Controllers']);

//Roles Routes
$routes->add('/admin/roles', 'Roles::index', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/active_roles', 'Roles::active_roles', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/inactive_roles', 'Roles::inactive_roles', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/roles/add_role', 'Roles::add_role', ['namespace' => 'Modules\Admin\Controllers']);
$routes->add('/admin/roles/edit_role/(:num)', 'Roles::edit_role/$1', ['namespace' => 'Modules\Admin\Controllers']);
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
