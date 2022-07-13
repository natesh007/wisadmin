<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Employees extends BaseController
{
	public function index(){
		$wsm = new AuthModel();
		//Get Employees
		$data['Department'] = @$this->request->getVar('Department');
		$data['JobTitle'] = @$this->request->getVar('JobTitle');
		$employees_array = array(
			"DeptID" => $data['Department'],
			"JobTID"  => $data['JobTitle']
		);
		$employees_data = $wsm->callwebservice(SAURL."employees", $employees_array, 1, 1);
		$data['employees'] = [];
		if (@$employees_data->status == "Success") {
			$data['employees'] = @$employees_data->data;
		}

		//Get Departments For Search Dropdown
        $departments_data = $wsm->callwebservice(SAURL."alldepartments", "", 1, 1);
		$data['departments'] = [];
		if (@$departments_data->status == "Success") {
			$data['departments'] = @$departments_data->data;
		}

		//Get Branches For Dropdown
		$branches_data = $wsm->callwebservice(SAURL."branches", "", 1, 1);
		$data['branches'] = [];
		if (@$branches_data->status == "Success") {
			$data['branches'] = @$branches_data->data;
		}

		//Get Job Titles For Dropdown
		$jobtitles_data = $wsm->callwebservice(SAURL."jobtitles", "", 1, 1);
		$data['jobtitles'] = [];
		if (@$jobtitles_data->status == "Success") {
			$data['jobtitles'] = @$jobtitles_data->data;
		}

		//Get Previous Experience For Dropdown
		$prev_exp_data = $wsm->callwebservice(SAURL."experiencelist", "");
		$data['prev_exp'] = [];
		if (@$prev_exp_data->status == "Success") {
			$data['prev_exp'] = @$prev_exp_data->data;
		}
		echo view('Modules\WIS\Views\attendence\listView', $data);
		
	}
	public function getdepartmentsbyorgnbranch(){
		$wsm = new AuthModel();
        $departments_array = array(
            "BrID" => implode(',', @$this->request->getVar('BrID'))
        );
        $departments_data = $wsm->callwebservice(SAURL."departments", $departments_array, 1, 1);
		$departments = [];
		if (@$departments_data->status == "Success") {
			$departments = @$departments_data->data->data;
		}
		header('Content-type: application/json');
        print json_encode($departments, JSON_PRETTY_PRINT);
        exit; 
	}
	public function get_employee(){
		$wsm = new AuthModel();
        $employee_array = array(
            "EmpID" => @$this->request->getVar('EmpID'),
        );
        $employee_data = $wsm->callwebservice(SAURL."getemployee", $employee_array, 1, 1);
		$data['employee'] = [];
		if (@$employee_data->status == "Success") {
			$data['employee'] = @$employee_data->data[0];
		}
		$data['departments'] = [];
		if(!empty($data['employee'])){
			$departments_array = array(
				"BrID" => @$data['employee']->BrID
			);
			$departments_data = $wsm->callwebservice(SAURL."departments", $departments_array, 1, 1);
			if (@$departments_data->status == "Success") {
				$data['departments'] = @$departments_data->data->data;
			}
		}
		header('Content-type: application/json');
        print json_encode($data, JSON_PRETTY_PRINT);
        exit;
	}
	public function add_or_update_employee(){
		if ($this->request->getMethod() == 'post') {
            $wsm = new AuthModel();
            $employee_array =  @$this->request->getVar();
			$employee_array['BrID'] = implode(',', $employee_array['BrID']);
			if(@$this->request->getVar('EmpID')){
				$employee_data = $wsm->callwebservice(SAURL."editemployee", $employee_array, 1, 1);
			}else{
				$employee_data = $wsm->callwebservice(SAURL."addemployee", $employee_array, 1, 1);
			}
            echo json_encode($employee_data);
        }
	}
}
