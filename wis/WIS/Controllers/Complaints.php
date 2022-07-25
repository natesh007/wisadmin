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
		echo view('Modules\WIS\Views\complaint\AddComplaint');
	}
	//Add Complaint Full Screen
	public function add_complaint_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaintFullScreen');
	}
	//Add Complaint Step 2
	public function add_complaint2(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint2');
	}
	//Add Complaint Step 2 Full Screen
	public function add_complaint2_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaint2FullScreen');
	}
	//Add Complaint Step 3
	public function add_complaint3(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint3');
	}
	//Add Complaint Step 3 Full Screen
	public function add_complaint3_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaint3FullScreen');
	}
	//Add Complaint Step 4
	public function add_complaint4(){
		if (session('EmpID') == null) {
			header('Location: ' . base_url('/'));
			exit;
		}
		echo view('Modules\WIS\Views\complaint\AddComplaint4');
	}
	//Add Complaint Step 4 Full Screen
	public function add_complaint4_mob(){
		echo view('Modules\WIS\Views\complaint\AddComplaint4FullScreen');
	}
}
