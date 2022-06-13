<?php

namespace Modules\WIS\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Modules\WIS\Views\welcome_message');
	}
	public function login(){
		echo view('Modules\WIS\Views\login');
	}
	public function dashboard(){
		echo view('Modules\WIS\Views\dashboard');
	}
	public function hospitalSelection(){
		echo view('Modules\WIS\Views\hospital_selection');
	}
	public function checklistSubDetails(){
		echo view('Modules\WIS\Views\checklist/checklist_sub_details');
	}
	public function checklist(){
		echo view('Modules\WIS\Views\checklist/checklist');
	}
	public function checklistDetails(){
		echo view('Modules\WIS\Views\checklist/checklistDetails');
	}
	public function engineering(){
		echo view('Modules\WIS\Views\engineering/engineering_water');
	}
	public function engineeringEnergy(){
		echo view('Modules\WIS\Views\engineering/engineering_energy');
	}
	public function engineeringAirConditioning(){
		echo view('Modules\WIS\Views\engineering/engineering_air_conditioning');
	}
	public function engineeringAirQuality(){
		echo view('Modules\WIS\Views\engineering/engineering_air_quality');
	}
	public function engineeringSoftIntegration(){
		echo view('Modules\WIS\Views\engineering/engineering_soft_integration');
	}
	public function engineeringSpecializedSolutions(){
		echo view('Modules\WIS\Views\engineering/engineering_specialized_solutions');
	}
	public function machinery(){
		echo view('Modules\WIS\Views\machinery/machinery');
	}
	public function machineryDetails(){
		echo view('Modules\WIS\Views\machinery/machinery_details');
	}
	public function resources(){
		echo view('Modules\WIS\Views\resources');
	}
	public function sanitationFaceCleaning(){
		echo view('Modules\WIS\Views\sanitation/sanitation_face_cleaning');
	}
	public function sanitationPestControl(){
		echo view('Modules\WIS\Views\sanitation/sanitation_pest_control');
	}
	public function sanitationWashroomDetails(){
		echo view('Modules\WIS\Views\sanitation/sanitation_washroom_details');
	}
	public function sanitationWashroomFullDetails(){
		echo view('Modules\WIS\Views\sanitation/sanitation_washroom_full_details');
	}
	public function sanitation(){
		echo view('Modules\WIS\Views\sanitation/sanitation_washroom');
	}
	public function sanitationWasteManagement(){
		echo view('Modules\WIS\Views\sanitation/sanitation_waste_management');
	}
	public function attendence(){
		echo view('Modules\WIS\Views\attendence/attendence');
	}
	public function attendenceDeptDetail(){
		echo view('Modules\WIS\Views\attendence/attendenceDeptDetail');
	}
	public function attendenceCustomDate(){
		echo view('Modules\WIS\Views\attendence/attendenceCustomDate');
	}
	public function listView(){
		echo view('Modules\WIS\Views\attendence/listView');
	}
	public function ppm(){
		echo view('Modules\WIS\Views/PPM');
	}
	public function amc(){
		echo view('Modules\WIS\Views/amc/AMC');
	}
	public function amcObservations(){
		echo view('Modules\WIS\Views/amc/amc_observations');
	}
	public function amcRecommendations(){
		echo view('Modules\WIS\Views/amc/amc_recommendations');
	}
	public function complaintFeedback(){
		echo view('Modules\WIS\Views/complaint/complaintFeedback');
	}
	public function complaintDashboard(){
		echo view('Modules\WIS\Views/complaint/complaintsNDashboard');
	}
	public function complaintList(){
		echo view('Modules\WIS\Views/complaint/complaintsNList');
	}
	public function complaintAttendence(){
		echo view('Modules\WIS\Views/complaint/complaintsNAttendance');
	}
	public function complaintCReports(){
		echo view('Modules\WIS\Views/complaint/complaintsNCReport');
	}
	public function complaintEReports(){
		echo view('Modules\WIS\Views/complaint/complaintsNEReport');
	}
	public function complaintDetReports(){
		echo view('Modules\WIS\Views/complaint/complaintAttendenceDeptDetail');
	}
	public function bedsOccupancy(){
		echo view('Modules\WIS\Views/bedsOccupancy/bedsOccupancy');
	}
	public function bedsOccupancyDetails(){
		echo view('Modules\WIS\Views/bedsOccupancy/bedsOccupancyDetails');
	}
	public function inventoryManagement(){
		// echo view('Modules\WIS\Views/inventoryManagement');
		echo view('Modules\WIS\Views/inventorySanitation');
	}
	public function manpowerUtilization(){
		echo view('Modules\WIS\Views/manpowerUtilization');
	}
	public function repairMaintenance(){
		echo view('Modules\WIS\Views/repairMaintenance');
	}
	public function billingSoftware(){
		echo view('Modules\WIS\Views/billingSoftware');
	}
	public function audits(){
		echo view('Modules\WIS\Views/audits/audits');
	}	
	public function auditObservations(){
		echo view('Modules\WIS\Views/audits/audit_observations');
	}
	public function auditRecommendations(){
		echo view('Modules\WIS\Views/audits/audit_recommendations');
	}
	

	
}
