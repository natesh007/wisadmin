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
		$buildings_array = array(
			"OrgID" => session('OrgID')
		);
		$buildings_data = $this->AuthModel->callwebservice(SAURL."getbuildings", $buildings_array, 1, 1);
		$data['buildings'] = [];
		if (@$buildings_data->status == "Success") {
			$data['buildings'] = @$buildings_data->data;
		}	
		$complaint_status = $this->AuthModel->callwebservice(SAURL."complaintstatus", '', 1, 1);
		$data['complaint_status'] = [];
		if($complaint_status->status == 'Success'){
			$data['complaint_status'] = @$complaint_status->data;
		}
		$categories = $this->AuthModel->callwebservice(SAURL."complaintcategorysearch", '', 1, 1);
		$data['categories'] = [];
		if($categories->status == 'Success'){
			$data['categories'] = @$categories->data->data;
		}
		$data['SearchKeywords'] = array(
			"ComCatID" => $this->request->getVar('ComCatID'),
			"ComNatID" => $this->request->getVar('ComNatID'),
			"BID" => $this->request->getVar('BID'),
			"BKID" => $this->request->getVar('BKID'),
			"FID" => $this->request->getVar('FID'),
			"RID" => $this->request->getVar('RID'),
			"ComplaintBy" => $this->request->getVar('ComplaintBy'),
			"ComplaintStatus" => $this->request->getVar('ComplaintStatus'),
		);
		$complaints_data = $this->AuthModel->callwebservice(SAURL."getcomplaints", $data['SearchKeywords'], 1, 1);
		$data['complaints'] = [];
		if (@$complaints_data->status == "Success") {
			$data['complaints'] = @$complaints_data->data;
		}
		$data['types'] = [];
		if($this->request->getVar('ComCatID') != ''){
			$categories_array = array(
				"ComCatID" => $this->request->getVar('ComCatID')
			);
			$natures_data = $this->AuthModel->callwebservice(SAURL."complaintnature", $categories_array, 1, 1);
			if (@$natures_data->status == "Success") {
				$data['types'] = @$natures_data->data;
			}
		}	
		$data['blocks'] = [];
		if($this->request->getVar('BID') != ''){
			$building_array = array(
				"BuildingID" => $this->request->getVar('BID')
			);
			$blocks_data = $this->AuthModel->callwebservice(SAURL."getblocks", $building_array, 1, 1);
			if (@$blocks_data->status == "Success") {
				$data['blocks'] = @$blocks_data->data;
			}
		}
		$data['floors'] = [];
		if($this->request->getVar('BKID') != ''){
			$block_array = array(
				"BlockID" => $this->request->getVar('BKID')
			);
			$floors_data = $this->AuthModel->callwebservice(SAURL."getfloors", $block_array, 1, 1);
			if (@$floors_data->status == "Success") {
				$data['floors'] = @$floors_data->data;
			}
		}
		$data['rooms'] = [];
		if($this->request->getVar('FID') != ''){
			$floor_array = array(
				"FloorID" => $this->request->getVar('FID')
			);
			$rooms_data = $this->AuthModel->callwebservice(SAURL."getrooms", $floor_array, 1, 1);
			if (@$rooms_data->status == "Success") {
				$data['rooms'] = @$rooms_data->data;
			}
		}
		echo view('Modules\WIS\Views\complaint\complaintsNList', $data);
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
				return redirect()->to(base_url('complaints/add_complaint4?ComID='.@$complaint->data->{0}->ComID.'&ComCatID='.@$complaint->data->{0}->ComCatID));
			}
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint3', $data);
	}

	//Add Complaint Step 4
	public function add_complaint4(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		$complaint_category_array = array(
			"ComCatID" => $_GET['ComCatID']
		);
		$complaint_category_data = $this->AuthModel->callwebservice(SAURL."getcomplaintcategory", $complaint_category_array, 1, 1);
		$data['complaint_category'] = [];
		if (@$complaint_category_data->status == "Success") {
			$data['complaint_category'] = @$complaint_category_data->data[0];
		}
		$complaint_array = array(
			"ComID" => $_GET['ComID']
		);
		$complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", $complaint_array, 1, 1);
		$data['complaint'] = [];
		if (@$complaint_data->status == "Success") {
			$data['complaint'] = @$complaint_data->data->{0};
			$data['complaint_images'] = @$complaint_data->data->Images;
		}
		$complaint_status = $this->AuthModel->callwebservice(SAURL."complaintstatus", '', 1, 1);
		$data['complaint_status'] = [];
		if($complaint_status->status == 'Success'){
			$data['complaint_status'] = @$complaint_status->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint4', $data);
	}

	//Add Complaint Mobile
	public function add_complaint_mob($OrgID = '', $BID = '', $BKID = '', $FID = '', $RID = ''){
		$data = [
			'OrgID' => $OrgID,
			'BID' => $BID,
			'BKID' => $BKID,
			'FID' => $FID,
			'RID' => $RID,
		];
		$data['info'] = [];
		if($OrgID != '' && $BID != '' && $BKID != '' && $FID != '' && $RID != ''){
			$info_data = $this->AuthModel->callwebservice(SAURL."getinfo", $data, 1, 1);
			if (@$info_data->status == "Success") {
				$data['info'] = @$info_data->data;
			}
		}
		$organizations_data = $this->AuthModel->callwebservice(SAURL."organizationslist", '', 1, 1);
		$data['organizations'] = [];
		if (@$organizations_data->status == "Success") {
			$data['organizations'] = @$organizations_data->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaintFullScreen', $data);
	}

	//Add Complaint Step 2 Mobile
	public function add_complaint2_mob(){
		$categories_array = @$this->request->getVar();
		$categories_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $categories_array, 1, 1);
		$data['categories'] = [];
		if (@$categories_data->status == "Success") {
			$data['categories'] = @$categories_data->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint2FullScreen', $data);
	}

	//Add Complaint Step 3 Mobile
	public function add_complaint3_mob(){
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
				return redirect()->to(base_url('complaints/add_complaint4_mob?ComID='.@$complaint->data->{0}->ComID.'&ComCatID='.@$complaint->data->{0}->ComCatID));
			}
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint3FullScreen', $data);
	}
	
	//Add Complaint Step 4 Mobile
	public function add_complaint4_mob(){
		$complaint_category_array = array(
			"ComCatID" => $_GET['ComCatID']
		);
		$complaint_category_data = $this->AuthModel->callwebservice(SAURL."getcomplaintcategory", $complaint_category_array, 1, 1);
		$data['complaint_category'] = [];
		if (@$complaint_category_data->status == "Success") {
			$data['complaint_category'] = @$complaint_category_data->data[0];
		}
		$complaint_array = array(
			"ComID" => $_GET['ComID']
		);
		$complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", $complaint_array, 1, 1);
		$data['complaint'] = [];
		if (@$complaint_data->status == "Success") {
			$data['complaint'] = @$complaint_data->data->{0};
			$data['complaint_images'] = @$complaint_data->data->Images;
		}
		$complaint_status = $this->AuthModel->callwebservice(SAURL."complaintstatus", '', 1, 1);
		$data['complaint_status'] = [];
		if($complaint_status->status == 'Success'){
			$data['complaint_status'] = @$complaint_status->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint4FullScreen', $data);
	}

	//Get Complaint Type By Complaint Category
	public function getcomplainttypesbycomplaintcategory(){
		$categories_array =  @$this->request->getVar();
		$natures_data = $this->AuthModel->callwebservice(SAURL."complaintnature", $categories_array, 1, 1);
		$natures = [];
		if (@$natures_data->status == "Success") {
			$natures = @$natures_data->data;
		}	
		header('Content-type: application/json');
		print json_encode($natures, JSON_PRETTY_PRINT);
		exit;
	}

	//Get Buildings By Organization
	public function getbuildingsbyorganization(){
		$organization_array =  @$this->request->getVar();
		$buildings_data = $this->AuthModel->callwebservice(SAURL."getbuildings", $organization_array, 1, 1);
		$buildings = [];
		if (@$buildings_data->status == "Success") {
			$buildings = @$buildings_data->data;
		}	
		header('Content-type: application/json');
		print json_encode($buildings, JSON_PRETTY_PRINT);
		exit;
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
}
