<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Complaints extends BaseController
{
	function __construct(){
		$this->AuthModel = new AuthModel();
	}

	//get Complaints for list view
	public function index(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		echo view('Modules\WIS\Views\complaint\complaintsNList');
	}

	//Add Complaint
	public function add_complaint(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		//Get Buildings For Dropdown
		$buildings_array = array(
			"OrgID" => session('OrgID')
		);
		$buildings_data = $this->AuthModel->callwebservice(SAURL."getbuildings", $buildings_array, 1, 1);
		$data['buildings'] = [];
		if (@$buildings_data->status == "Success") {
			$data['buildings'] = @$buildings_data->data;
		}	
		echo view('Modules\WIS\Views\complaint\AddComplaint', $data);
	}
	
	//Add Complaint Step 2
	public function add_complaint2(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		$categories_array = @$this->request->getVar();
		$categories_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $categories_array, 1, 1);
		$data['categories'] = [];
		if (@$categories_data->status == "Success") {
			$data['categories'] = @$categories_data->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint2', $data);
	}
	
	//Add Complaint Step 3
	public function add_complaint3(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		$location_array = array(
			"BID" => $_GET['BID'],
			"BKID" => $_GET['BKID'],
			"FID" => $_GET['FID'],
			"RID" => $_GET['RID']
		);
		$location_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $location_array, 1, 1);
		$data['location'] = [];
		if (@$location_data->status == "Success") {
			$data['location'] = @$location_data->data->location;
		}
		$complaints_array = array(
			"ComCatID" => $_GET['ComCatID']
		);
		$complaints_data = $this->AuthModel->callwebservice(SAURL."complaintnature", $complaints_array, 1, 1);
		$data['complaints'] = [];
		if (@$complaints_data->status == "Success") {
			$data['complaints'] = @$complaints_data->data;
		}
		
		$complaint_category = $this->AuthModel->callwebservice(SAURL."getcomplaintcategory", $complaints_array, 1, 1);
		$data['complaint_category'] = [];
		if (@$complaint_category->status == "Success") {
			$data['complaint_category'] = @$complaint_category->data[0];
		}
		$priorities_data = $this->AuthModel->callwebservice(SAURL."complaintpriority", '', 1, 1);
		$data['priorities'] = [];
		if (@$priorities_data->status == "Success") {
			$data['priorities'] = @$priorities_data->data;
		}
		if ($this->request->getMethod() == 'post') {
			$complaint_array = @$this->request->getVar();
			$complaint_array['Images'] = [];
			if ($this->request->getFileMultiple('Images')) {
				foreach ($this->request->getFileMultiple('Images') as $key => $image) {
					if($image != ''){
						$orginalextension = $image->getClientExtension();
						$randcharforimg = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8 / strlen($x)))), 1, 8);
						$newimgname = $randcharforimg . '-' . time() . '.' . $orginalextension;
						$image->move(WRITEPATH . 'uploads/category/', $newimgname);
						$complaint_array['Images'][$key] = 'writable/uploads/category/' . $newimgname;
					}
				}
			}
			$complaint = $this->AuthModel->callwebservice(SAURL."addcomplaint", $complaint_array, 1, 1);
			if($complaint->status == 'Success'){
				$complaints['complaint_category'] = $data['complaint_category'];
				$complaints['complaint'] = @$complaint->data->{0};
				$complaints['complaint_images'] = @$complaint->data->Images;
				$complaint_status = $this->AuthModel->callwebservice(SAURL."complaintstatus", '', 1, 1);
				$complaints['complaint_status'] = [];
				if($complaint_status->status == 'Success'){
					$complaints['complaint_status'] = @$complaint_status->data;
				}
				echo view('Modules\WIS\Views\complaint\AddComplaint4', $complaints);
				exit;
			}
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint3', $data);
	}

	//Get Blocks By Building
	public function getblocksbybuilding(){
		$building_array =  @$this->request->getVar();
		$blocks_data = $this->AuthModel->callwebservice(SAURL."getblocks", $building_array, 1, 1);
		$blocks = [];
		if (@$blocks_data->status == "Success") {
			$blocks = @$blocks_data->data;
		}	
		header('Content-type: application/json');
        print json_encode($blocks, JSON_PRETTY_PRINT);
        exit;
	}

	//Get Floors By Block
	public function getfloorsbyblock(){
		$block_array =  @$this->request->getVar();
		$floors_data = $this->AuthModel->callwebservice(SAURL."getfloors", $block_array, 1, 1);
		$floors = [];
		if (@$floors_data->status == "Success") {
			$floors = @$floors_data->data;
		}	
		header('Content-type: application/json');
        print json_encode($floors, JSON_PRETTY_PRINT);
        exit;
	}

	//Get Rooms By Floors
	public function getroomsbyfloor(){
		$floor_array =  @$this->request->getVar();
		$rooms_data = $this->AuthModel->callwebservice(SAURL."getrooms", $floor_array, 1, 1);
		$rooms = [];
		if (@$rooms_data->status == "Success") {
			$rooms = @$rooms_data->data;
		}	
		header('Content-type: application/json');
        print json_encode($rooms, JSON_PRETTY_PRINT);
        exit;
	}

	//Add Complaint Full Screen
	public function add_complaint_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaintFullScreen');
	}
	//Add Complaint Step 2 Full Screen
	public function add_complaint2_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaint2FullScreen');
	}
	//Add Complaint Step 3 Full Screen
	public function add_complaint3_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaint3FullScreen');
	}
	//Add Complaint Step 4 Full Screen
	public function add_complaint4_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaint4FullScreen');
	}
}
