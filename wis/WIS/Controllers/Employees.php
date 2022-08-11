<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Employees extends BaseController
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
	//get employees for list view
	public function index(){
		//Get Employees
		$this->data['Department'] = @$this->request->getVar('Department');
		$this->data['JobTitle'] = @$this->request->getVar('JobTitle');
		$this->data['JoiningDate'] = @$this->request->getVar('JoiningDate');
		$this->data['Status'] = @$this->request->getVar('Status');
		$employees_array = array(
			"DeptID" => $this->data['Department'],
			"JobTID"  => $this->data['JobTitle'],
			"JoiningDate"  => $this->data['JoiningDate'],
			"Status"  => $this->data['Status']
		);
		$employees_data = $this->AuthModel->callwebservice(SAURL."employees", $employees_array, 1, 1);
		$this->data['employees'] = [];
		if (@$employees_data->status == "Success") {
			$this->data['employees'] = @$employees_data->data;
		}

		//Get Departments For Search Dropdown
        $departments_data = $this->AuthModel->callwebservice(SAURL."alldepartments", "", 1, 1);
		$this->data['departments'] = [];
		if (@$departments_data->status == "Success") {
			$this->data['departments'] = @$departments_data->data;
		}

		//Get Job Titles For Dropdown
		$jobtitles_data = $this->AuthModel->callwebservice(SAURL."jobtitles", "", 1, 1);
		$this->data['jobtitles'] = [];
		if (@$jobtitles_data->status == "Success") {
			$this->data['jobtitles'] = @$jobtitles_data->data;
		}

		//Get Previous Experience For Dropdown
		$prev_exp_data = $this->AuthModel->callwebservice(SAURL."experiencelist", "");
		$this->data['prev_exp'] = [];
		if (@$prev_exp_data->status == "Success") {
			$this->data['prev_exp'] = @$prev_exp_data->data;
		}

		//Get Previous Experience For Dropdown
		$shifts_data = $this->AuthModel->callwebservice(SAURL."shiftslist", "");
		$this->data['shifts'] = [];
		if (@$shifts_data->status == "Success") {
			$this->data['shifts'] = @$shifts_data->data;
		}
		//For Download CSV File
		if(isset($_POST['DownloadXL'])){
			$filename = 'employees.csv';
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/csv; ");
			$employees = [];
			if($this->data['employees']){
				$i = 0;
				foreach($this->data['employees'] as $employee){
					if(@$employee->Employees){
						foreach($employee->Employees as $emp){
							$employees[$i] = [
								'SINO' => $i+1,
								'EmpID' => 'EMP-'.@$emp->EmpID,
								'EmpName' => @$emp->EmpName,
								'EmailID' => @$emp->EmailID,
								'Contact' => @$emp->Contact,
								'DeptName' => @$employee->DeptName .' -> '. @$emp->DeptName,
								'JobType' => @$emp->JobType,
								'JobTitle' => @$emp->JobTitle,
								'DateOfJoining' => @$emp->DateOfJoining,
								'Experience' => @$emp->Experience,
								'PreviousExperience' => @$emp->PreviousExperience,
								'TotalExperience' => 0,
								'CreatedDate' => @$emp->CreatedDate,
								'UpdatedDate' => @$emp->UpdatedDate,
							];
							$i++;
						}
					}
				}
			}
			$file = fopen('php://output', 'w');
			$header = array("S. No.", "Emp. ID.", "Employee Name", "Email ID", "Contact No.", "Service Department", "Job Type", "Job Title", "Joined On", "Experience", "Previous Experience", "Total Experience", "Created On", "Last Updated On");
			fputcsv($file, $header);
			foreach ($employees as $key => $line) {
				fputcsv($file, $line);
			}
			fclose($file);
			exit;
		}
		
		echo view('Modules\WIS\Views\attendence\listView', $this->data);
		
	}
	//Get departments based on selected organization and branches
	public function getdepartmentsbyorgnbranch(){
        $departments_array = array(
            "BrID" => implode(',', @$this->request->getVar('BrID'))
        );
        $departments_data = $this->AuthModel->callwebservice(SAURL."departments", $departments_array, 1, 1);
		$departments = [];
		if (@$departments_data->status == "Success") {
			$departments = @$departments_data->data;
		}
		header('Content-type: application/json');
        print json_encode($departments, JSON_PRETTY_PRINT);
        exit; 
	}
	//Get employee for edit
	public function get_employee(){
        $employee_data = $this->AuthModel->callwebservice(SAURL."getemployee", @$this->request->getVar(), 1, 1);
		$data['employee'] = [];
		if (@$employee_data->status == "Success") {
			$data['employee'] = @$employee_data->data[0];
		}
		$data['departments'] = [];
		if(!empty($data['employee'])){
			$departments_array = array(
				"BrID" => @$data['employee']->BrID
			);
			$departments_data = $this->AuthModel->callwebservice(SAURL."departments", $departments_array, 1, 1);
			if (@$departments_data->status == "Success") {
				$data['departments'] = @$departments_data->data;
			}
		}
		header('Content-type: application/json');
        print json_encode($data, JSON_PRETTY_PRINT);
        exit;
	}
	//Add Or Update employee
	public function add_or_update_employee(){
		if ($this->request->getMethod() == 'post') {
            $employee_array =  @$this->request->getVar();
			$employee_array['BrID'] = implode(',', $employee_array['BrID']);
			$employee_array['ProfilePic'] = [];
			if ($this->request->getFile('ProfilePic')->getName() != '') {
				$orginalextension = $this->request->getFile('ProfilePic')->getClientExtension();
				$randcharforimg = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8 / strlen($x)))), 1, 8);
				$newimgname = $randcharforimg . '-' . time() . '.' . $orginalextension;
				$this->request->getFile('ProfilePic')->move(WRITEPATH . 'uploads/ProfilePics/', $newimgname);
				$ProfilePic = \Config\Services::image()
					->withFile(WRITEPATH . 'uploads/ProfilePics/' . $newimgname)
					->resize(100, 100, true, 'height')
					->save(WRITEPATH . 'uploads/ProfilePics/Thumbs/' . $newimgname);
				if ($ProfilePic) {
					$employee_array['ProfilePic'] = 'writable/uploads/ProfilePics/Thumbs/' . $newimgname;
				}
			}
			if(@$this->request->getVar('EmpID')){
				$employee_data = $this->AuthModel->callwebservice(SAURL."editemployee", $employee_array, 1, 1);
			}else{
				$employee_data = $this->AuthModel->callwebservice(SAURL."addemployee", $employee_array, 1, 1);
			}
            echo json_encode($employee_data);
        }
	}
}
