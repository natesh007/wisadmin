<?php

namespace Modules\WIS\Controllers;
use Modules\Auth\Models\AuthModel;

class Home extends BaseController
{
	function __construct(){
		$this->AuthModel = new AuthModel();
		$branches_data = $this->AuthModel->callwebservice(SAURL."branches", "", 1, 1);
        $this->data['branches'] = [];
        if (@$branches_data->status == "Success") {
            $this->data['branches'] = @$branches_data->data;
        }
	}
	public function dashboard(){
		echo view('Modules\WIS\Views\dashboard', $this->data);
	}
	public function hospitalSelection(){
		echo view('Modules\WIS\Views\hospital_selection', $this->data);
	}
	public function checklistSubDetails(){
		echo view('Modules\WIS\Views\checklist/checklist_sub_details', $this->data);
	}
	public function checklist(){
		echo view('Modules\WIS\Views\checklist/checklist', $this->data);
	}
	public function checklistDetails(){
		echo view('Modules\WIS\Views\checklist/checklistDetails', $this->data);
	}
	public function engineering(){
		echo view('Modules\WIS\Views\engineering/engineering_water', $this->data);
	}
	public function engineeringEnergy(){
		echo view('Modules\WIS\Views\engineering/engineering_energy', $this->data);
	}
	public function engineeringAirConditioning(){
		echo view('Modules\WIS\Views\engineering/engineering_air_conditioning', $this->data);
	}
	public function engineeringAirQuality(){
		echo view('Modules\WIS\Views\engineering/engineering_air_quality', $this->data);
	}
	public function engineeringSoftIntegration(){
		echo view('Modules\WIS\Views\engineering/engineering_soft_integration', $this->data);
	}
	public function engineeringSpecializedSolutions(){
		echo view('Modules\WIS\Views\engineering/engineering_specialized_solutions', $this->data);
	}
	public function machinery(){
		echo view('Modules\WIS\Views\machinery/machinery', $this->data);
	}
	public function machineryDetails(){
		echo view('Modules\WIS\Views\machinery/machinery_details', $this->data);
	}
	public function resources(){
		echo view('Modules\WIS\Views\resources', $this->data);
	}
	public function sanitationFaceCleaning(){
		echo view('Modules\WIS\Views\sanitation/sanitation_face_cleaning', $this->data);
	}
	public function sanitationPestControl(){
		echo view('Modules\WIS\Views\sanitation/sanitation_pest_control', $this->data);
	}
	public function sanitationWashroomDetails(){
		echo view('Modules\WIS\Views\sanitation/sanitation_washroom_details', $this->data);
	}
	public function sanitationWashroomFullDetails(){
		echo view('Modules\WIS\Views\sanitation/sanitation_washroom_full_details', $this->data);
	}
	public function sanitation(){
		echo view('Modules\WIS\Views\sanitation/sanitation_washroom', $this->data);
	}
	public function sanitationWasteManagement(){
		echo view('Modules\WIS\Views\sanitation/sanitation_waste_management', $this->data);
	}
	public function attendence(){
		echo view('Modules\WIS\Views\attendence/attendence', $this->data);
	}
	public function attendenceDeptDetail(){
		echo view('Modules\WIS\Views\attendence/attendenceDeptDetail', $this->data);
	}
	public function attendenceCustomDate(){
		echo view('Modules\WIS\Views\attendence/attendenceCustomDate', $this->data);
	}
	public function listViewVacancy(){
		echo view('Modules\WIS\Views\attendence/ListViewVacancy', $this->data);
	}
	public function ppm(){
		echo view('Modules\WIS\Views/PPM', $this->data);
	}
	public function amc(){
		echo view('Modules\WIS\Views/amc/AMC', $this->data);
	}
	public function amcObservations(){
		echo view('Modules\WIS\Views/amc/amc_observations', $this->data);
	}
	public function amcRecommendations(){
		echo view('Modules\WIS\Views/amc/amc_recommendations', $this->data);
	}
	public function complaintFeedback(){
		echo view('Modules\WIS\Views/complaint/complaintFeedback', $this->data);
	}
	public function complaintDashboard(){
		echo view('Modules\WIS\Views/complaint/complaintsNDashboard', $this->data);
	}
	public function complaintAttendence(){
		echo view('Modules\WIS\Views/complaint/complaintsNAttendance', $this->data);
	}
	public function complaintCReports(){
		echo view('Modules\WIS\Views/complaint/complaintsNCReport', $this->data);
	}
	public function complaintEReports(){
		echo view('Modules\WIS\Views/complaint/complaintsNEReport', $this->data);
	}
	public function complaintDetReports(){
		echo view('Modules\WIS\Views/complaint/complaintAttendenceDeptDetail', $this->data);
	}
	public function bedsOccupancy(){
		echo view('Modules\WIS\Views/bedsOccupancy/bedsOccupancy', $this->data);
	}
	public function bedsOccupancyDetails(){
		echo view('Modules\WIS\Views/bedsOccupancy/bedsOccupancyDetails', $this->data);
	}
	public function inventoryManagement(){
		echo view('Modules\WIS\Views/inventorySanitation', $this->data);
	}
	public function manpowerUtilization(){
		echo view('Modules\WIS\Views/manpowerUtilization', $this->data);
	}
	public function repairMaintenance(){
		echo view('Modules\WIS\Views/repairMaintenance', $this->data);
	}
	public function billingSoftware(){
		echo view('Modules\WIS\Views/billingSoftware', $this->data);
	}
	public function audits(){
		echo view('Modules\WIS\Views/audits/audits', $this->data);
	}	
	public function auditObservations(){
		echo view('Modules\WIS\Views/audits/audit_observations', $this->data);
	}
	public function auditRecommendations(){
		echo view('Modules\WIS\Views/audits/audit_recommendations', $this->data);
	}
	public function activeinactive(){
		$wsm = new AuthModel();
		$data = array(
			"MasterTable" => @$this->request->getVar('MasterTable'),
			"ID" => @$this->request->getVar('ID'),
			"Status" => @$this->request->getVar('Status'),
		);
		$res = $wsm->callwebservice(SAURL."activeinactive", $data);
		echo json_encode($res);
	}

	
}
