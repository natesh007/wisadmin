<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;
use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QROutputInterface;

class Complaints extends BaseController
{
	function __construct(){
		$this->AuthModel = new AuthModel();
		$branches_data = $this->AuthModel->callwebservice(SAURL."branches", "", 1, 1);
        $this->data['branches'] = [];
        if (@$branches_data->status == "Success") {
            $this->data['branches'] = @$branches_data->data;
        }
	}

	//get Complaints for list view
	public function index(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		//print_r($this->data['SearchKeywords']);exit;
		$complaints_data = $this->AuthModel->callwebservice(SAURL."getcomplaints", array(), 1, 1);
		$this->data['complaints'] = [];
		if (@$complaints_data->status == "Success") {
			$this->data['complaints'] = @$complaints_data->data->ComplaintsData[0];
		}
		echo view('Modules\WIS\Views\complaint\complaintsNList', $this->data);
	}
	public function getcomplaints(){
		$array = array(
			"ComCatID" => "",
			"ComNatID" => "",
			"BID" => "",
			"FID" => "",
			"RID" => "",
			"ComplaintBy" => "",
			"ComplaintStatus" => "",
			"FromDate" => @$this->request->getVar('FromDate'),
			"ToDate" => @$this->request->getVar('ToDate')
		);
		$complaints_data = $this->AuthModel->callwebservice(SAURL."getcomplaints", $array, 1, 1);
		$complaints = [];
		if (@$complaints_data->status == "Success") {
			$complaints = @$complaints_data->data->List;
		}
		header('Content-type: application/json');
		print json_encode($complaints, JSON_PRETTY_PRINT);
		exit;
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
		$this->data['buildings'] = [];
		if (@$buildings_data->status == "Success") {
			$this->data['buildings'] = @$buildings_data->data;
		}	
		echo view('Modules\WIS\Views\complaint\AddComplaint', $this->data);
	}
	
	//Add Complaint Step 2
	public function add_complaint2(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		$categories_array = @$this->request->getVar();
		$categories_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $categories_array, 1, 1);
		$this->data['categories'] = [];
		if (@$categories_data->status == "Success") {
			$this->data['categories'] = @$categories_data->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint2', $this->data);
	}
	
	//Add Complaint Step 3
	public function add_complaint3(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		$location_array = array(
			"BID" => $_GET['BID'],
			"FID" => $_GET['FID'],
			"RID" => $_GET['RID']
		);
		$location_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $location_array, 1, 1);
		$this->data['location'] = [];
		if (@$location_data->status == "Success") {
			$this->data['location'] = @$location_data->data->location;
		}
		$complaints_array = array(
			"ComCatID" => $_GET['ComCatID']
		);
		$complaints_data = $this->AuthModel->callwebservice(SAURL."complaintnature", $complaints_array, 1, 1);
		$this->data['complaints'] = [];
		if (@$complaints_data->status == "Success") {
			$this->data['complaints'] = @$complaints_data->data;
		}
		
		$complaint_category = $this->AuthModel->callwebservice(SAURL."getcomplaintcategory", $complaints_array, 1, 1);
		$this->data['complaint_category'] = [];
		if (@$complaint_category->status == "Success") {
			$this->data['complaint_category'] = @$complaint_category->data[0];
		}
		$priorities_data = $this->AuthModel->callwebservice(SAURL."complaintpriority", '', 1, 1);
		$this->data['priorities'] = [];
		if (@$priorities_data->status == "Success") {
			$this->data['priorities'] = @$priorities_data->data;
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
						$image->move(WRITEPATH . 'uploads/complaints/before/', $newimgname);
						$complaint_array['Images'][$key] = 'writable/uploads/complaints/before/' . $newimgname;
					}
				}
			}
			$complaint = $this->AuthModel->callwebservice(SAURL."addcomplaint", $complaint_array, 1, 1);
			if($complaint->status == 'Success'){
				return redirect()->to(base_url('complaints/add_complaint4?ComID='.@$complaint->data->{0}->ComID.'&ComCatID='.@$complaint->data->{0}->ComCatID));
			}
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint3', $this->data);
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
		$this->data['complaint_category'] = [];
		if (@$complaint_category_data->status == "Success") {
			$this->data['complaint_category'] = @$complaint_category_data->data[0];
		}
		$complaint_array = array(
			"ComID" => $_GET['ComID']
		);
		$complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", $complaint_array, 1, 1);
		$this->data['complaint'] = [];
		if (@$complaint_data->status == "Success") {
			$this->data['complaint'] = @$complaint_data->data->{0};
			$this->data['complaint_images'] = @$complaint_data->data->Images;
		}
		$complaint_status = $this->AuthModel->callwebservice(SAURL."complaintstatus", '', 1, 1);
		$this->data['complaint_status'] = [];
		if($complaint_status->status == 'Success'){
			$this->data['complaint_status'] = @$complaint_status->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint4', $this->data);
	}

	//Add Complaint Mobile
	public function add_complaint_mob($OrgID = '', $BID = '', $FID = '', $RID = ''){
		$this->data = [
			'OrgID' => $OrgID,
			'BID' => $BID,
			'FID' => $FID,
			'RID' => $RID,
		];
		$this->data['info'] = [];
		if($OrgID != '' && $BID != '' && $FID != '' && $RID != ''){
			$info_data = $this->AuthModel->callwebservice(SAURL."getinfo", $this->data, 1, 1);
			if (@$info_data->status == "Success") {
				$this->data['info'] = @$info_data->data;
			}
		}
		$organizations_data = $this->AuthModel->callwebservice(SAURL."organizationslist", '', 1, 1);
		$this->data['organizations'] = [];
		if (@$organizations_data->status == "Success") {
			$this->data['organizations'] = @$organizations_data->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaintFullScreen', $this->data);
	}

	//Add Complaint Step 2 Mobile
	public function add_complaint2_mob(){
		$categories_array = @$this->request->getVar();
		$categories_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $categories_array, 1, 1);
		$this->data['categories'] = [];
		if (@$categories_data->status == "Success") {
			$this->data['categories'] = @$categories_data->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint2FullScreen', $this->data);
	}

	//Add Complaint Step 3 Mobile
	public function add_complaint3_mob(){
		$location_array = array(
			"BID" => $_GET['BID'],
			"FID" => $_GET['FID'],
			"RID" => $_GET['RID']
		);
		$location_data = $this->AuthModel->callwebservice(SAURL."complaintcategory", $location_array, 1, 1);
		$this->data['location'] = [];
		if (@$location_data->status == "Success") {
			$this->data['location'] = @$location_data->data->location;
		}
		$complaints_array = array(
			"ComCatID" => $_GET['ComCatID']
		);
		$complaints_data = $this->AuthModel->callwebservice(SAURL."complaintnature", $complaints_array, 1, 1);
		$this->data['complaints'] = [];
		if (@$complaints_data->status == "Success") {
			$this->data['complaints'] = @$complaints_data->data;
		}
		
		$complaint_category = $this->AuthModel->callwebservice(SAURL."getcomplaintcategory", $complaints_array, 1, 1);
		$this->data['complaint_category'] = [];
		if (@$complaint_category->status == "Success") {
			$this->data['complaint_category'] = @$complaint_category->data[0];
		}
		$priorities_data = $this->AuthModel->callwebservice(SAURL."complaintpriority", '', 1, 1);
		$this->data['priorities'] = [];
		if (@$priorities_data->status == "Success") {
			$this->data['priorities'] = @$priorities_data->data;
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
						$image->move(WRITEPATH . 'uploads/complaints/before/', $newimgname);
						$complaint_array['Images'][$key] = 'writable/uploads/complaints/before/' . $newimgname;
					}
				}
			}
			$complaint = $this->AuthModel->callwebservice(SAURL."addcomplaint", $complaint_array, 1, 1);
			if($complaint->status == 'Success'){
				return redirect()->to(base_url('complaints/add_complaint4_mob?ComID='.@$complaint->data->{0}->ComID.'&ComCatID='.@$complaint->data->{0}->ComCatID));
			}
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint3FullScreen', $this->data);
	}
	
	//Add Complaint Step 4 Mobile
	public function add_complaint4_mob(){
		$complaint_category_array = array(
			"ComCatID" => $_GET['ComCatID']
		);
		$complaint_category_data = $this->AuthModel->callwebservice(SAURL."getcomplaintcategory", $complaint_category_array, 1, 1);
		$this->data['complaint_category'] = [];
		if (@$complaint_category_data->status == "Success") {
			$this->data['complaint_category'] = @$complaint_category_data->data[0];
		}
		$complaint_array = array(
			"ComID" => $_GET['ComID']
		);
		$complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", $complaint_array, 1, 1);
		$this->data['complaint'] = [];
		if (@$complaint_data->status == "Success") {
			$this->data['complaint'] = @$complaint_data->data->{0};
			$this->data['complaint_images'] = @$complaint_data->data->Images;
		}
		$complaint_status = $this->AuthModel->callwebservice(SAURL."complaintstatus", '', 1, 1);
		$this->data['complaint_status'] = [];
		if($complaint_status->status == 'Success'){
			$this->data['complaint_status'] = @$complaint_status->data;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint4FullScreen', $this->data);
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

	//Get Floors By Building
	public function getfloorsbybuilding(){
		$building_array =  @$this->request->getVar();
		$floors_data = $this->AuthModel->callwebservice(SAURL."getfloors", $building_array, 1, 1);
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

	//Get employees by departments for dropdown
	public function getemployeesbydepartment(){
        $employees_data = $this->AuthModel->callwebservice(SAURL."employeesbydepartment", @$this->request->getVar(), 1, 1);
		$employees = [];
		if (@$employees_data->status == "Success") {
			$employees = @$employees_data->data;
		}
		header('Content-type: application/json');
        print json_encode($employees, JSON_PRETTY_PRINT);
        exit;
	}

	//Update Complaint(Assign and In Process)
	public function update_complaint($ComID, $Mode){
		$complaint_array = array(
			"ComID" => $ComID
		);
		$complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", $complaint_array, 1, 1);
		$this->data['complaint'] = [];
		if (@$complaint_data->status == "Success") {
			$this->data['complaint'] = @$complaint_data->data->{0};
			$this->data['images'] = @$complaint_data->data->Images;
		}
		$this->data['departments'] = [];
		$departments_array = array(
			"DeptName" => "",
			"BrID" => "",
			"SortType" => "department",
		);
		$departments_data = $this->AuthModel->callwebservice(SAURL."alldepartments", $departments_array, 1, 1);
		if (@$departments_data->status == "Success") {
			$this->data['departments'] = @$departments_data->data;
		}
		$this->data['ComID'] = $ComID;
		$this->data['Mode'] = $Mode;
		if ($this->request->getMethod() == 'post') {
            $complaint_array =  @$this->request->getVar();
			if($Mode == 2){
				$complaint_array['Images'] = [];
				if ($this->request->getFileMultiple('Images')) {
					foreach ($this->request->getFileMultiple('Images') as $key => $image) {
						if($image != ''){
							$orginalextension = $image->getClientExtension();
							$randcharforimg = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8 / strlen($x)))), 1, 8);
							$newimgname = $randcharforimg . '-' . time() . '.' . $orginalextension;
							$image->move(WRITEPATH . 'uploads/complaints/after/', $newimgname);
							$complaint_array['Images'][$key] = 'writable/uploads/complaints/after/' . $newimgname;
						}
					}
				}
			}
			$complaint_data = $this->AuthModel->callwebservice(SAURL."updatecomplaint", $complaint_array, 1, 1);
			if($complaint_data->status == 'Success'){
				if($Mode == 1){
					$complaint_array = array(
						"ComID" => $ComID
					);
					$complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", $complaint_array, 1, 1);
					$this->data['complaint'] = [];
					if (@$complaint_data->status == "Success") {
						$this->data['complaint'] = @$complaint_data->data->{0};
					}
					if(isset($this->data['complaint']->WhatsApp) && $this->data['complaint']->WhatsApp != ''){
						$this->data['Result'] = $complaint_data->status;
						echo view('Modules\WIS\Views\complaint\UpdateComplaint', $this->data);
						exit;
					}else{
						return redirect()->to(base_url('/complaintList'))->with('SusMsg', $complaint_data->msg);
					}
				}else{
					return redirect()->to(base_url('/complaintList'))->with('SusMsg', $complaint_data->msg);
				}
			}else{
				return redirect()->to(base_url('/complaints/update_complaint/'.$ComID.'/'.$Mode))->with('ErrMsg', $complaint_data->msg);
			}
        }
		echo view('Modules\WIS\Views\complaint\UpdateComplaint', $this->data);
	}
	//Get complaint for edit
	public function getcomplaint(){
        $complaint_data = $this->AuthModel->callwebservice(SAURL."getcomplaint", @$this->request->getVar(), 1, 1);
		$data['complaint'] = [];
		$data['images'] = [];
		if (@$complaint_data->status == "Success") {
			$data['complaint'] = @$complaint_data->data->{0};
			$data['images'] = @$complaint_data->data->Images;
		}
		header('Content-type: application/json');
        print json_encode($data, JSON_PRETTY_PRINT);
        exit;
	}
	//Get QR Codes
	public function QR_Codes(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		//print_r($this->data['SearchKeywords']);exit;
		$rooms_data = $this->AuthModel->callwebservice(SAURL."getorgsrooms", '', 1, 1);
		$this->data['rooms'] = [];
		if (@$rooms_data->status == "Success") {
			$this->data['rooms'] = @$rooms_data->data->rooms;
		}
		//For Download CSV File
		if(isset($_POST['Download'])){
			$filename = 'qr_codes.csv';
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/csv; ");
			$file = fopen('php://output', 'w');
			$rooms = [];
			$i = 0;
			foreach($this->data['rooms'] as $room){
				$rooms[$i] = [
					'SNO' => $i+1,
					'Building' => @$room->BuildingName,
					'Floor' => @$room->FloorName,
					'Room' => @$room->RoomName,
					'QR_Code' => base_url('complaints/add_complaint/'.session('OrgID').'/'.$room->BID.'/'.$room->FID.'/'.$room->RID)
				];
				$i++;
			}
			$header = array("S. No.", "Building Name", "Floor Name", "Room Name", "QR Code URL");
			fputcsv($file, $header);
			foreach ($rooms as $key => $line) {
				fputcsv($file, $line);
			}
			fclose($file);
			exit;
		}
		echo view('Modules\WIS\Views\complaint\QR_Codes', $this->data);
	}
	public function QR_Test(){
		$url = 'https://igreen.systems/';
		$str = (new QRCode)->render($url);
		echo '<img src="'.(new QRCode)->render($url).'" width="200" height="200" />';
		//echo 'Hi Ranga';
	}
}
