<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Departments extends BaseController
{
	function __construct(){
		$this->AuthModel = new AuthModel();
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		$branches_data = $this->AuthModel->callwebservice(SAURL."branches", "", 1, 1);
        $this->data['branches'] = [];
        if (@$branches_data->status == "Success") {
            $this->data['branches'] = @$branches_data->data;
        }
	}
	//get departments for list view
	public function index(){
		$departments_array = array(
			"DeptName" => "",
			"BrID" => "",
			"SortType" => "",
		);
		$departments_data = $this->AuthModel->callwebservice(SAURL."alldepartments", $departments_array, 1, 1);
		$this->data['departments'] = [];
		if (@$departments_data->status == "Success") {
			$this->data['departments'] = @$departments_data->data;
		}
		echo view('Modules\WIS\Views\attendence\ListViewDepartment', $this->data);
	}
	//Get department for edit
	public function get_department(){
        $department_array = array(
            "DeptID" => @$this->request->getVar('DeptID'),
        );
        $department_data = $this->AuthModel->callwebservice(SAURL."getdepartment", $department_array, 1, 1);
		$department = [];
		if (@$department_data->status == "Success") {
			$department = @$department_data->data[0];
		}
		header('Content-type: application/json');
        print json_encode($department, JSON_PRETTY_PRINT);
        exit;
	}
	//Add Or Update department
	public function add_or_update_department(){
		if ($this->request->getMethod() == 'post') {
            $department_array =  @$this->request->getVar();
			if(@$this->request->getVar('DeptID')){
				$department_data = $this->AuthModel->callwebservice(SAURL."editdepartment", $department_array, 1, 1);
			}else{
				$department_data = $this->AuthModel->callwebservice(SAURL."adddepartment", $department_array, 1, 1);
			}
            echo json_encode($department_data);
        }
	}
}
