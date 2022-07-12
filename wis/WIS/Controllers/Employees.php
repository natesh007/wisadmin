<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Employees extends BaseController
{
	public function index(){
		$wsm = new AuthModel();
		$emp_data = $wsm->callwebservice(SAURL."employees", "", 1, 1);
		$data['employees'] = [];
		if (@$emp_data->status == "Success") {
			$data['employees'] = @$emp_data->data;
		}
        $departments_data = $wsm->callwebservice(SAURL."alldepartments", "", 1, 1);
		$data['departments'] = [];
		if (@$departments_data->status == "Success") {
			$data['departments'] = @$departments_data->data->data;
		}
		/*$Org =  array(
			"OrgID" => session(''),
		);
		$jobtitles_data = $wsm->callwebservice(SAURL."jobtitles", $Org, 1, 1);
		$data['jobtitles'] = [];
		if (@$jobtitles_data->status == "Success") {
			$data['jobtitles'] = @$jobtitles_data->data;
		}*/
		echo view('Modules\WIS\Views\attendence\listView', $data);
		
	}public function updateList(){
		$wsm = new AuthModel();
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
		echo view('Modules\WIS\Views\attendence\UpdateList', $data);
	}
	public function add_employee(){
		if ($this->request->getMethod() == 'post') {
            $wsm = new AuthModel();
            $emp_data =  array(
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
            $emp_data = $wsm->callwebservice(SAURL."addemployee", $emp_data, 1, 1);
            echo json_encode($emp_data);
        }
	}
	public function getbranchesandjobtitlesbyorg(){
        $wsm = new AuthModel();
        $Org = array(
            "OrgID" => @$this->request->getVar('OrgID'),
        );
        $branches_data = $wsm->callwebservice(SAURL."branches", $Org);
		$data['branches'] = [];
		if (@$branches_data->status == "Success") {
			$data['branches'] = @$branches_data->data;
		}
        $jobtitles_data = $wsm->callwebservice(SAURL."jobtitles", $Org);
		$data['jobtitles'] = [];
		if (@$jobtitles_data->status == "Success") {
			$data['jobtitles'] = @$jobtitles_data->data;
		}
		header('Content-type: application/json');
        print json_encode($data, JSON_PRETTY_PRINT);
        exit; 
    }
	public function getdepartmentsbyorgnbranch(){
		$wsm = new AuthModel();
        $OrgBr = array(
            "OrgID" => @$this->request->getVar('OrgID'),
            "BrID" => implode(',', @$this->request->getVar('BrID'))
        );
        $departments_data = $wsm->callwebservice(SAURL."departments", $OrgBr);
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
        $Emp = array(
            "EmpID" => @$this->request->getVar('EmpID'),
        );
        $emp_data = $wsm->callwebservice(SAURL."getemployee", $Emp, 1, 1);
		$data['employee'] = [];
		if (@$emp_data->status == "Success") {
			$data['employee'] = @$emp_data->data[0];
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
			$Org = array(
				"OrgID" => @$data['employee']->OrgID,
			);
			$branches_data = $wsm->callwebservice(SAURL."branches", $Org);
			if (@$branches_data->status == "Success") {
				$data['branches'] = @$branches_data->data;
			}
			$jobtitles_data = $wsm->callwebservice(SAURL."jobtitles", $Org);
			if (@$jobtitles_data->status == "Success") {
				$data['jobtitles'] = @$jobtitles_data->data;
			}
			$OrgBr = array(
				"OrgID" => @$data['employee']->OrgID,
				"BrID" => @$data['employee']->BrID
			);
			$departments_data = $wsm->callwebservice(SAURL."departments", $OrgBr);
			if (@$departments_data->status == "Success") {
				$data['departments'] = @$departments_data->data->data;
			}
		}
		header('Content-type: application/json');
        print json_encode($data, JSON_PRETTY_PRINT);
        exit;
	}
	public function update_employee(){
		if ($this->request->getMethod() == 'post') {
            $wsm = new AuthModel();
            $emp_data =  array(
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
            $emp_data = $wsm->callwebservice(SAURL."editemployee", $emp_data, 1, 1);
            echo json_encode($emp_data);
        }
	}
}
