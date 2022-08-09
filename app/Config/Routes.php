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

$routes->add('/', 'Auth::index',['namespace' => 'Modules\Auth\Controllers']);
$routes->add('/login', 'Auth::login',['namespace' => 'Modules\Auth\Controllers']);
$routes->add('/logout', 'Auth::logout', ['namespace' => 'Modules\Auth\Controllers']);
$routes->add('/loginAjax', 'Auth::loginAjax', ['namespace' => 'Modules\Auth\Controllers']);
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
$routes->add('/listViewVacancy', 'Home::listViewVacancy',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/ppm', 'Home::ppm',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/amc', 'Home::amc',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/amcObservations', 'Home::amcObservations',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/amcRecommendations', 'Home::amcRecommendations',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintFeedback', 'Home::complaintFeedback',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaintDashboard', 'Home::complaintDashboard',['namespace' => 'Modules\WIS\Controllers']);
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
$routes->add('/activeinactive', 'Home::activeinactive',['namespace' => 'Modules\WIS\Controllers']);

//Employees Routes
$routes->add('/listView', 'Employees::index',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/employees/getdepartmentsbyorgnbranch', 'Employees::getdepartmentsbyorgnbranch',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/employees/get_employee', 'Employees::get_employee',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/employees/add_or_update_employee', 'Employees::add_or_update_employee',['namespace' => 'Modules\WIS\Controllers']);

//Departments Routes
$routes->add('/listViewDepartment', 'Departments::index',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/departments/get_department', 'Departments::get_department',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/departments/add_or_update_department', 'Departments::add_or_update_department',['namespace' => 'Modules\WIS\Controllers']);

//Complaints Routes
$routes->add('/complaintList', 'Complaints::index',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint', 'Complaints::add_complaint',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint2', 'Complaints::add_complaint2',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint3', 'Complaints::add_complaint3',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint4', 'Complaints::add_complaint4',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint_mob', 'Complaints::add_complaint_mob',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint_mob/(:num)/(:num)/(:num)/(:num)/(:num)', 'Complaints::add_complaint_mob/$1/$2/$3/$4/$5',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint2_mob', 'Complaints::add_complaint2_mob',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint3_mob', 'Complaints::add_complaint3_mob',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/add_complaint4_mob', 'Complaints::add_complaint4_mob',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/getblocksbybuilding', 'Complaints::getblocksbybuilding',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/getfloorsbyblock', 'Complaints::getfloorsbyblock',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/getroomsbyfloor', 'Complaints::getroomsbyfloor',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/getcomplainttypesbycomplaintcategory', 'Complaints::getcomplainttypesbycomplaintcategory',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/get_complaint', 'Complaints::get_complaint',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/getemployeesbydepartment', 'Complaints::getemployeesbydepartment',['namespace' => 'Modules\WIS\Controllers']);
$routes->add('/complaints/update_complaint', 'Complaints::update_complaint',['namespace' => 'Modules\WIS\Controllers']);
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
