<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Departments extends BaseController
{
	public function index(){
		$wsm = new AuthModel();
		$data['DepartmentName'] = @$this->request->getVar('DepartmentName');
		$data['Branch'] = @$this->request->getVar('Branch');
		$departments_array = array(
			"DeptName" => $data['DepartmentName'],
			"BrID" => $data['Branch']
		);
		$departments_data = $wsm->callwebservice(SAURL."alldepartments", $departments_array, 1, 1);
		$data['departments'] = [];
		if (@$departments_data->status == "Success") {
			$data['departments'] = @$departments_data->data;
		}
        $branches_data = $wsm->callwebservice(SAURL."branches", "", 1, 1);
        $data['branches'] = [];
        if (@$branches_data->status == "Success") {
            $data['branches'] = @$branches_data->data;
        }
		echo view('Modules\WIS\Views\attendence\ListViewDepartment', $data);
	}
	public function add_department(){
		if ($this->request->getMethod() == 'post') {
            /*$wsm = new AuthModel();
            $employee_array =  array(
				"EmpName" => @$this->request->getVar('EmpName'),
				"OrgID"  => @$this->request->getVar('OrgID'),
				"BrID"  => implode(',', @$this->request->getVar('BrID')),
				"DeptID"  => @$this->request->getVar('DeptID'),
				"JobTID"  => @$this->request->getVar('JobTID'),
				"Email"  => @$this->request->getVar('Email'),
				"Gender"  => @$this->request->getVar('Gender'),
				"Mobile"  => @$this->request->getVar('Mobile'),
				"DateOfJoining"  => @$this->request->getVar('DateOfJoining'),
				"JobType"  => @$this->request->getVar('JobType'),
				"PreviousExp"  => @$this->request->getVar('PreviousExp'),
				"Address"  => @$this->request->getVar('Address'),
            );
            $employee_data = $wsm->callwebservice(SAURL."addemployee", $employee_array, 1, 1);
            echo json_encode($employee_data);*/
        }
	}	
	public function get_department(){
		/*$wsm = new AuthModel();
        $employee_array = array(
            "EmpID" => @$this->request->getVar('EmpID'),
        );
        $employee_data = $wsm->callwebservice(SAURL."getemployee", $employee_array, 1, 1);
		$data['employee'] = [];
		if (@$employee_data->status == "Success") {
			$data['employee'] = @$employee_data->data[0];
		}
		$org_data = $wsm->callwebservice(SAURL."organizationslist","");
		$data['organizations'] = [];
		if (@$org_data->status == "Success") {
			$data['organizations'] = @$org_data->data;
		}
		$prev_exp_data = $wsm->callwebservice(SAURL."experiencelist","");
		$data['prev_exp'] = [];
		if (@$prev_exp_data->status == "Success") {
			$data['prev_exp'] = @$prev_exp_data->data;
		}
		$data['branches'] = [];
		$data['jobtitles'] = [];
		$data['departments'] = [];
		if(!empty($data['employee'])){
			$branches_array = array(
				"OrgID" => @$data['employee']->OrgID,
			);
			$branches_data = $wsm->callwebservice(SAURL."branches", $branches_array, 1, 1);
			if (@$branches_data->status == "Success") {
				$data['branches'] = @$branches_data->data;
			}
			$jobtitles_data = $wsm->callwebservice(SAURL."jobtitles", $Org);
			if (@$jobtitles_data->status == "Success") {
				$data['jobtitles'] = @$jobtitles_data->data;
			}
			$departments_array = array(
				"OrgID" => @$data['employee']->OrgID,
				"BrID" => @$data['employee']->BrID
			);
			$departments_data = $wsm->callwebservice(SAURL."departments", $departments_array);
			if (@$departments_data->status == "Success") {
				$data['departments'] = @$departments_data->data->data;
			}
		}
		header('Content-type: application/json');
        print json_encode($data, JSON_PRETTY_PRINT);
        exit;*/
	}
	public function update_department(){
		if ($this->request->getMethod() == 'post') {
            /*$wsm = new AuthModel();
            $employee_array =  array(
				"EmpID" => @$this->request->getVar('EmpID'),
				"EmpName" => @$this->request->getVar('EmpName'),
				"OrgID"  => @$this->request->getVar('OrgID'),
				"BrID"  => implode(',', @$this->request->getVar('BrID')),
				"DeptID"  => @$this->request->getVar('DeptID'),
				"JobTID"  => @$this->request->getVar('JobTID'),
				"Email"  => @$this->request->getVar('Email'),
				"Gender"  => @$this->request->getVar('Gender'),
				"Mobile"  => @$this->request->getVar('Mobile'),
				"DateOfJoining"  => @$this->request->getVar('DateOfJoining'),
				"JobType"  => @$this->request->getVar('JobType'),
				"PreviousExp"  => @$this->request->getVar('PreviousExp'),
				"Address"  => @$this->request->getVar('Address'),
            );
            $employee_data = $wsm->callwebservice(SAURL."editemployee", $employee_array, 1, 1);
            echo json_encode($employee_data);*/
        }
	}
}
