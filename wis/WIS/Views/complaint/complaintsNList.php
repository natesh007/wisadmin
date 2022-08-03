﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complaints List</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet_1.css?ver=1" rel="stylesheet" />
</head>
<body>
<?php echo view('Modules\WIS\Views\common/leftmenu')  ?>
<?php echo view('Modules\WIS\Views\common/footer')  ?>
<?php echo view('Modules\WIS\Views\common/header')  ?>
<?php echo view('Modules\WIS\Views\common/header_sub')  ?>

    <div class="AppFllContainer FllScrn">
        <div class="ContainerLeft">
            <span class="SctnTtl CmplntsFdbck">Complaints</span>
            <div class="SctnInnerLnks">
                <ul class="InnrLnksHldr">
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintList" class="LnkTxt Actv">Complaints Admin</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintAttendence" class="LnkTxt">Man Power</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintDashboard" class="LnkTxt">Complaints Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="SctnInnerMenu" style="margin-top: 0;">
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <span class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-headingFour">
                                Complaint Reports
                            </button>
                        </span>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="SbLnk">
                                   
                                    <li>
                                        <a href="<?php echo base_url(); ?>HospitalAdmin/complaintCReports" class="SbLnk">Complaints Report Overview</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ContainerRight">
            <div class="SctnDtlsTtlHldr">
                <div class="BrcmnbHldr">
                    <ul class="DtlsBrdCrmb">
                        <li>
                            <span class="PgTtl">Complaints Admin</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="AppWdgtHldr InnrHldr Cmplnts">
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr TtCmplnts" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->UnAssigned+@$complaints->ComplaintsData[0]->InProcess+@$complaints->ComplaintsData[0]->Completed; ?></span>
                            <span class="WdgtNme">Total Complaints</span>
                        </div>
                    </div>
                </div>
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr UnAssgnd" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->UnAssigned; ?></span>
                            <span class="WdgtNme">Un-Assigned</span>
                        </div>
                    </div>
                </div>
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr InPrcss" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->InProcess; ?></span>
                            <span class="WdgtNme">In Process</span>
                        </div>
                    </div>
                </div>
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr Cmpltd" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->Completed; ?></span>
                            <span class="WdgtNme">Completed</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="SrchFltrDv ChckLst">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">
                            <span class="InnrTtl">Date</span>
                            <span class="InnrTxt">05-12-2021</span>
                        </div>
                        <div class="col-md-11">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="ComCatID" name="ComCatID" id="ComCatID">
                                            <option disabled selected value hidden>Complaint Category</option>
                                            <option value="1">Heating/ Cooling</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="ComNatID" name="ComNatID" id="ComNatID">
                                            <option disabled selected value hidden>Complaint Type</option>
                                            <option value="1">Heating/ Cooling</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="BID" name="BID" id="BID">
                                            <option disabled selected value hidden>Building</option>
                                            <?php if(!empty($buildings)){
                                                foreach($buildings as $building){
                                                    echo '<option value="'.$building->BID.'">'.$building->BuildingName.' ('.$building->BrName.')</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="BKID" name="BKID" id="BKID">
                                            <option disabled selected value hidden>Block</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="FID" name="FID" id="FID">
                                            <option disabled selected value hidden>Floor</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="RID" name="RID" id="RID">
                                            <option disabled selected value hidden>Room</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="ComplaintBy" name="ComplaintBy">
                                            <option disabled selected value hidden>Complaint by</option>
                                            <option value="ALL">All</option>
                                            <option value="0">Patient</option>
                                            <option value="1">Employee</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <select class="form-select InptBx" aria-label="ComplaintStatus" name="ComplaintStatus">
                                            <option disabled selected value hidden>Status</option>
                                            <?php if(!empty($complaint_status)){
                                                foreach($complaint_status as $key => $status){
                                                    echo '<option value="'.$key.'">'.$status.'</option> ';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-1 BttnHldr mb-2">
                                        <button type="submit" class="btn btn-primary SbmtBtn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="InnrPgBgHldr">
                <div class="AddCmplt">
                    <a href="<?= base_url('complaints/add_complaint') ?>" class="AddNewRcrd">Add Complaint</a>
                </div>
                <div class="TableHldr">
                    <table class="AppDataTbl">
                        <tr class="Hdr">
                            <th>
                                <span class="DataTtl">S. No.</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint S. No.</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint Type</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint Nature</span>
                            </th>
                            <th>
                                <span class="DataTtl">Building</span>
                            </th>
                            <th>
                                <span class="DataTtl">Block</span>
                            </th>
                            <th>
                                <span class="DataTtl">Floor</span>
                            </th>
                            <th>
                                <span class="DataTtl">Room</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint given by</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint time</span>
                            </th>
                            <th>
                                <span class="DataTtl">Repair - Material</span>
                            </th>
                            <th>
                                <span class="DataTtl">Status</span>
                            </th>
                            <th>
                                <span class="DataTtl">Completed by</span>
                            </th>
                        </tr>
                        <?php if(!empty($complaints->List)){
                            $i = 1;
                            foreach($complaints->List as $complaint){
                                echo '<tr ';
                                if($complaint->AssignedBy == '')
                                    echo 'class="Rd"';
                                echo '>
                                    <td>
                                        <span class="DataTxt">'.$i.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->ComID.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->CategoryName.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->ComplaintNature.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->BuildingName.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->BlockName.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->FloorName.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->RoomName.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">';
                                        if($complaint->empid == 0) echo 'Patient'; else echo 'Employee';
                                        echo '</span>
                                        &nbsp;<span class="CmpltBy"><img src="'.base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg').'"/><span class="CmpltByInfo">Mobile</span></span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->CreatedDate.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">--------</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->StausName.'</span>
                                    </td>
                                    <td>';
                                        if($complaint->AssignedBy != '') 
                                            echo '<span class="DataTxt">'.$complaint->AssignedBy.'</span>';
                                        else
                                            echo '<span id="LnkBtn1" onclick="javascript:ModalPopup();" class="BtnLnk">Assign Complaint</span>';
                                   echo '</td>
                                </tr>';
                                $i++;
                            } 
                        } ?>
                        <!-- <tr class="Rd">
                            <td>
                                <span class="DataTxt">22</span>
                            </td>
                            <td>
                                <span class="DataTxt">22</span>
                            </td>
                            <td>
                                <span class="DataTxt">Cleanliness</span>
                            </td>
                            <td>
                                <span class="DataTxt">Building 02</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span class="DataTxt">Not Assigned</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopup();" class="BtnLnk">Assign Complaint</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">21</span>
                            </td>
                            <td>
                                <span class="DataTxt">21</span>
                            </td>
                            <td>
                                <span class="DataTxt">Drinking Water</span>
                            </td>
                            <td>
                                <span class="DataTxt">Building 01</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Raju</span>
                            </td>
                        </tr>
                        <tr class="Rd">
                            <td>
                                <span class="DataTxt">20</span>
                            </td>
                            <td>
                                <span class="DataTxt">20</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Visitor</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt Bad">03:00 PM (+2 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span class="DataTxt">Not Assigned</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopup();" class="BtnLnk">Assign Complaint</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">19</span>
                            </td>
                            <td>
                                <span class="DataTxt">19</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">B. Gopal</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">18</span>
                            </td>
                            <td>
                                <span class="DataTxt">18</span>
                            </td>
                            <td>
                                <span class="DataTxt">DrinkingWater</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupTwo();" class="BtnLnk Prcss">In Process</span>
                            </td>
                            <td>
                                <span class="DataTxt">Syam Rao</span>
                            </td>
                        </tr>
                        <tr class="Rd">
                            <td>
                                <span class="DataTxt">17</span>
                            </td>
                            <td>
                                <span class="DataTxt">17</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span class="DataTxt">Not Assigned</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopup();" class="BtnLnk">Assign Complaint</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">16</span>
                            </td>
                            <td>
                                <span class="DataTxt">16</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Building 02</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Gopal</span>
                            </td>
                        </tr>
                        <tr class="Rd">
                            <td>
                                <span class="DataTxt">15</span>
                            </td>
                            <td>
                                <span class="DataTxt">15</span>
                            </td>
                            <td>
                                <span class="DataTxt">Cleanliness</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Visitor</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt Bad">03:00 PM (+2 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span class="DataTxt">Not Assigned</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopup();" class="BtnLnk">Assign Complaint</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">14</span>
                            </td>
                            <td>
                                <span class="DataTxt">14</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">Gopal L</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">13</span>
                            </td>
                            <td>
                                <span class="DataTxt">13</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupTwo();" class="BtnLnk Prcss">In Process</span>
                            </td>
                            <td>
                                <span class="DataTxt">L Prem</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">12</span>
                            </td>
                            <td>
                                <span class="DataTxt">12</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Gopal</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">11</span>
                            </td>
                            <td>
                                <span class="DataTxt">11</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Raju</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">10</span>
                            </td>
                            <td>
                                <span class="DataTxt">10</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupTwo();" class="BtnLnk Prcss">In Process</span>
                            </td>
                            <td>
                                <span class="DataTxt">K. Prem</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">9</span>
                            </td>
                            <td>
                                <span class="DataTxt">9</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Raju</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">8</span>
                            </td>
                            <td>
                                <span class="DataTxt">8</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Gopal</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">7</span>
                            </td>
                            <td>
                                <span class="DataTxt">7</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupTwo();" class="BtnLnk Prcss">In Process</span>
                            </td>
                            <td>
                                <span class="DataTxt">S. Arvind</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">6</span>
                            </td>
                            <td>
                                <span class="DataTxt">6</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Raju</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">5</span>
                            </td>
                            <td>
                                <span class="DataTxt">5</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">S. Syam</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">4</span>
                            </td>
                            <td>
                                <span class="DataTxt">4</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupTwo();" class="BtnLnk Prcss">In Process</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Raju</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">3</span>
                            </td>
                            <td>
                                <span class="DataTxt">3</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Patient</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Web</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">N. Raju</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">2</span>
                            </td>
                            <td>
                                <span class="DataTxt">2</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Manual</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupThree();" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>
                            </td>
                            <td>
                                <span class="DataTxt">K. Roja N</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="DataTxt">1</span>
                            </td>
                            <td>
                                <span class="DataTxt">1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Heating/ Cooling</span>
                            </td>
                            <td>
                                <span class="DataTxt">Area Name</span>
                            </td>
                            <td>
                                <span class="DataTxt">Block A</span>
                            </td>
                            <td>
                                <span class="DataTxt">Waiting Hall - 1</span>
                            </td>
                            <td>
                                <span class="DataTxt">Employee</span>
                                &nbsp;<span class="CmpltBy"><img src="<?= base_url('/public/wis_assets/Images/AppIcon-About-BluThm.svg'); ?>"/><span class="CmpltByInfo">Mobile</span></span>
                            </td>
                            <td>
                                <span class="DataTxt">03:00 PM (+1 Hour)</span>
                            </td>
                            <td>
                                <span class="DataTxt">--------</span>
                            </td>
                            <td>
                                <span id="LnkBtn1" onclick="javascript:ModalPopupTwo();" class="BtnLnk Prcss">In Process</span>
                            </td>
                            <td>
                                <span class="DataTxt"> Raju</span>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="AppMdlHldr" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr Smllr">
            <div class="ModalTtlHldr">
                <div class="ModalTtlHldr">
                    <span class="SctnTtl">Assigned Complaint</span>
                    <span class="FtrTtl">Heating/ Cooling</span>
                    <span id="AppMdlClsBtn" onclick="javascript:ModalPopup();" class="ModalClsBtn"></span>
                </div>
                <div class="ModalFnctnHldr">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <span class="InnrTtl">Date</span>
                                <span class="InnrTxt">06-12-2021</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Area</span>
                                <span class="InnrTxt">Area Name</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Block</span>
                                <span class="InnrTxt">Block A</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Room</span>
                                <span class="InnrTxt">Wating Hall - 1</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Complaint by</span>
                                <span class="InnrTxt">Patient</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Complaint Time</span>
                                <span class="InnrTxt Bad">03:00 PM (+2 Hour)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ModalCntntHldr">
                    <div class="ModalFnctnHldr HeightAuto" style="background: #fff6ff; border-color: #e7bde7;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <span class="InnrTtl">Patient Name</span>
                                    <span class="InnrTxt">Naveen Kumar</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="InnrTtl">Contact No.</span>
                                    <span class="InnrTxt">+91 1234567890</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="InnrTtl">Patient ID</span>
                                    <span class="InnrTxt">AA88565-55615</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="InnrTtl">Comment</span>
                                    <span class="InnrTxt">A/c is not cooling</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="TableHldr">
                        <table class="AppDataTbl">
                            <tr class="Hdr">
                                <th>

                                </th>
                                <th>
                                    <span class="DataTtl">Emp. ID.</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Employee Name</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Contact No.</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Shift Timing</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Assigned</span>
                                </th>
                                <th>
                                    <span class="DataTtl">In Progress</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Total Task Completed</span>
                                </th>
                            </tr>
                            <tr>
                                <td class="Cntr">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    </div>
                                </td>
                                <td>
                                    <span class="DataTxt">EMP-1001</span>
                                </td>
                                <td>
                                    <span class="DataTxt">N. Raju</span>
                                </td>
                                <td>
                                    <span class="DataTxt">+91 8987876567</span>
                                </td>
                                <td>
                                    <span class="DataTxt">09:00 AM to 07:00 PM</span>
                                </td>
                                <td>
                                    <span class="DataTxt">3</span>
                                </td>
                                <td>
                                    <span class="DataTxt">1</span>
                                </td>
                                <td>
                                    <span class="DataTxt">8</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="Cntr">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    </div>
                                </td>
                                <td>
                                    <span class="DataTxt">EMP-1002</span>
                                </td>
                                <td>
                                    <span class="DataTxt">B Gopal</span>
                                </td>
                                <td>
                                    <span class="DataTxt">+91 9898789098</span>
                                </td>
                                <td>
                                    <span class="DataTxt">09:00 AM to 07:00 PM</span>
                                </td>
                                <td>
                                    <span class="DataTxt">1</span>
                                </td>
                                <td>
                                    <span class="DataTxt">3</span>
                                </td>
                                <td>
                                    <span class="DataTxt">7</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="Cntr">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    </div>
                                </td>
                                <td>
                                    <span class="DataTxt">EMP-1003</span>
                                </td>
                                <td>
                                    <span class="DataTxt">N. Raju</span>
                                </td>
                                <td>
                                    <span class="DataTxt">+91 9098789098</span>
                                </td>
                                <td>
                                    <span class="DataTxt">09:00 AM to 07:00 PM</span>
                                </td>
                                <td>
                                    <span class="DataTxt">3</span>
                                </td>
                                <td>
                                    <span class="DataTxt">1</span>
                                </td>
                                <td>
                                    <span class="DataTxt">15</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="ModalFnctnHldr" style="background: #fff;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="InnrTtl">Recommended To</span>
                                    <span class="InnrTxt">N. Raju (EMP-1001)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CmpltImgBlk">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint1.png'); ?>" class="CmpltImg"/>
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint2.png'); ?>" class="CmpltImg"/>
                            </div>
                        </div>
                    </div>
                    <div class="CmpltDescBlk">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <p><span class="CmpltDesHed">Description : </span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="DvBtnHldr">
                        <button type="button" onclick="location.href = '<?php echo site_url('HospitalAdmin/complaintList1'); ?>'" class="btn btn-primary SbmtBtn">Assign</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="AppMdlHldrTwo" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr Smllr">
            <div class="ModalTtlHldr">
                <div class="ModalTtlHldr">
                    <span class="SctnTtl">Assigned Complaint</span>
                    <span class="FtrTtl">Heating/ Cooling</span>
                    <span id="AppMdlClsBtn" onclick="javascript:ModalPopupTwo();" class="ModalClsBtn"></span>
                </div>
                <div class="ModalFnctnHldr">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <span class="InnrTtl">Date</span>
                                <span class="InnrTxt">06-12-2021</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Area</span>
                                <span class="InnrTxt">Area Name</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Block</span>
                                <span class="InnrTxt">Block A</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Room</span>
                                <span class="InnrTxt">Wating Hall - 1</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Complaint by</span>
                                <span class="InnrTxt">Patient</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Complaint Time</span>
                                <span class="InnrTxt Bad">03:00 PM (+2 Hour)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ModalCntntHldr">
                    <div class="ModalFnctnHldr HeightAuto" style="background: #fff6ff; border-color: #e7bde7;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <span class="InnrTtl">Patient Name</span>
                                    <span class="InnrTxt">Naveen Kumar</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="InnrTtl">Contact No.</span>
                                    <span class="InnrTxt">+91 1234567890</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="InnrTtl">Patient ID</span>
                                    <span class="InnrTxt">AA88565-55615</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="InnrTtl">Comment</span>
                                    <span class="InnrTxt">A/c is not cooling</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ModalFnctnHldr HeightAuto" style="background: #ecffe6; border-color: #81e562;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="InnrTtl">Assigned to</span>
                                    <span class="InnrTxt">N. Raju (EMP-1001)</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="InnrTtl">Assigned time</span>
                                    <span class="InnrTxt">05:18 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ModalFnctnHldr" style="background: #fff;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control InptBx" id="Text2" value="Notes">
                                </div>
                                <div class="col-md-3">
                                    <span class="InnrTtl">Status</span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                                        <label class="form-check-label" for="flexRadioDefault8">
                                            Pending
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <span class="InnrTtl">&nbsp;</span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Complete
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CmpltImgBlk">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint1.png'); ?>" class="CmpltImg"/>
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint2.png'); ?>" class="CmpltImg"/>
                            </div>
                        </div>
                    </div>
                    <div class="CmpltDescBlk">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <p><span class="CmpltDesHed">Description : </span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="DvBtnHldr">
                        <button type="button" onclick="" class="btn btn-primary SbmtBtn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="AppMdlHldrThree" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr Smllr">
            <div class="ModalTtlHldr">
                <div class="ModalTtlHldr">
                    <span class="SctnTtl">Assigned Complaint</span>
                    <span class="FtrTtl">Heating/ Cooling</span>
                    <span id="AppMdlClsBtn" onclick="javascript:ModalPopupThree();" class="ModalClsBtn"></span>
                </div>
                <div class="ModalFnctnHldr">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <span class="InnrTtl">Date</span>
                                <span class="InnrTxt">06-12-2021</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Area</span>
                                <span class="InnrTxt">Building 01</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Block</span>
                                <span class="InnrTxt">Block A</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Room</span>
                                <span class="InnrTxt">Wating Hall - 1</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Complaint by</span>
                                <span class="InnrTxt">Patient</span>
                            </div>
                            <div class="col-md-2">
                                <span class="InnrTtl">Complaint Time</span>
                                <span class="InnrTxt Bad">03:00 PM (+2 Hour)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ModalCntntHldr">
                    <div class="ModalFnctnHldr HeightAuto" style="background: #fff6ff; border-color: #e7bde7;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <span class="InnrTtl">Patient Name</span>
                                    <span class="InnrTxt">Naveen Kumar</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="InnrTtl">Contact No.</span>
                                    <span class="InnrTxt">+91 1234567890</span>
                                </div>
                                <div class="col-md-2">
                                    <span class="InnrTtl">Patient ID</span>
                                    <span class="InnrTxt">AA88565-55615</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="InnrTtl">Comment</span>
                                    <span class="InnrTxt">A/c is not cooling</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ModalFnctnHldr HeightAuto" style="background: #ecffe6; border-color: #81e562;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="InnrTtl">Assigned to</span>
                                    <span class="InnrTxt">N. Raju (EMP-1001)</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="InnrTtl">Assigned time</span>
                                    <span class="InnrTxt">05:18 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ModalFnctnHldr HeightAuto" style="background: #ecffe6; border-color: #81e562;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="InnrTtl">Note</span>
                                    <span class="InnrTxt">Resolve this action immediately.</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="InnrTtl">Status</span>
                                    <span class="InnrTxt">Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CmpltImgBlk">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint1.png'); ?>" class="CmpltImg"/>
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint2.png'); ?>" class="CmpltImg"/>
                            </div>
                        </div>
                    </div>
                    <div class="CmpltDescBlk">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <p><span class="CmpltDesHed">Description : </span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script>
        $('#ComCatID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getcomplainttypesbycomplaintcategory') ?>", {ComCatID: $(this).val()}, function(data, status){      
                    var blocks = '<option disabled selected value hidden>Complaint Type</option>';
                    if(data.length > 0){
                        $.each(data, function (i, field) {
                            blocks += '<option value="'+i+'">'+field+'</option>';
                        });
                    }
                    $('#ComNatID').html(blocks);
                });
            }
        });
        $('#BID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getblocksbybuilding') ?>", {BuildingID: $(this).val()}, function(data, status){      
                    var blocks = '<option disabled selected value hidden>Block</option>';
                    if(data.length > 0){
                        $.each(data, function (i, field) {
                            blocks += '<option value="'+field.BKID+'">'+field.BlockName+'</option>';
                        });
                    }
                    $('#BKID').html(blocks);
                });
            }
        });
        $('#BKID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getfloorsbyblock') ?>", {BlockID: $(this).val()}, function(data, status){
                    var floors = '<option disabled selected value hidden>Floor</option>';
                    $.each(data, function (i, field) {
                        floors += '<option value="'+field.FID+'">'+field.FloorName+'</option>';
                    });
                    $('#FID').html(floors);
                });
            }
        });
        $('#FID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getroomsbyfloor') ?>", {FloorID: $(this).val()}, function(data, status){
                    var rooms = '<option disabled selected value hidden>Room</option>';
                    $.each(data, function (i, field) {
                        rooms += '<option value="'+field.RID+'">'+field.RoomName+'</option>';
                    });
                    $('#RID').html(rooms);
                });
            }
        });
    </script>
</body>
</html>
