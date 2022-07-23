<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complaints Dasboard</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet_1.css?ver=1" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/BxSlider.css?ver=1" rel="stylesheet" />
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/BxSlider.js"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/SliderScript.js"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
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
                        <a href="<?php echo base_url(); ?>/complaintList" class="LnkTxt">Complaints Admin</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintAttendence" class="LnkTxt Actv">Man Power</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintDashboard" class="LnkTxt">Complaints Dashboard</a>
                    </li>
                    
                    <!-- <li>
                        <a href="<?php //echo base_url(); ?>HospitalAdmin/complaintReports" class="LnkTxt">Complaints Reports</a>
                    </li> -->
                    
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
                                        <a href="<?php echo base_url(); ?>/complaintCReports" class="SbLnk">Complaints Report Overview</a>
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
                            <span class="PgTtl">Attendence Dashboard</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="InnrPgBgHldr">
                <div class="StffAttndDshb FullDetails">
                    <span class="DptTtl">Engineering Staff 
                        <span class="SftInnrDtls">
                            Shift 1 : <span class="DrpdwnTxt">09:00AM - 06:00PM</span><span class="DrpdwnTxtDiv"> | </span>Shift 2 : <span class="DrpdwnTxt">09:00AM - 06:00PM</span><span class="DrpdwnTxtDiv"> | </span>Shift 3 : <span class="DrpdwnTxt">09:00AM - 06:00PM</span>
                        </span>
                    </span>

                    <div class="StffAttndDshbHldr">
                        <div class="StffBscDtls">
                            <div class="StffImgHldr">
                                <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="StffImg Suprvsr" />
                            </div>
                            <div class="StffNmDtlsHldr">
                                <span class="StffNme Suprvsr">Chinmay Kant</span>
                                <span class="StffDsgntn">Dept. Supervisor</span>
                            </div>
                        </div>
                        <div class="StffDshHghlgtHldr">
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 1</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 2</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 3</span>
                            </div>
                        </div>
                        <div class="CmplntBtnBlk">
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="AttDeptDtlsHldr">
                        <div class="TableHldr">
                        <table class="AppDataTbl">
                                <tr class="Hdr">
                                    <th>
                                        <span class="DataTtl">S. No.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Emp. ID.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Employee Name</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Service Type</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Joined On</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Total Tasks Completed</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Avg. Task per Day</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Assigned Tasks</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Tasks In Process</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 1</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 2</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 3</span>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1001</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">N. Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1002</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Balu Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1200</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>    
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1003</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Deeraj</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1211</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1004</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1005</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Electrical</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>

                <div class="StffAttndDshb FullDetails">
                    <span class="DptTtl">HVAC</span>
                    <div class="StffAttndDshbHldr">
                        <div class="StffBscDtls">
                            <div class="StffImgHldr">
                                <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="StffImg Suprvsr" />
                            </div>
                            <div class="StffNmDtlsHldr">
                                <span class="StffNme Suprvsr">Ram Nath</span>
                                <span class="StffDsgntn">Dept. HAAC</span>
                            </div>
                        </div>
                        <div class="StffDshHghlgtHldr">
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 1</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 2</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 3</span>
                            </div>
                        </div>
                    </div>
                    <div class="AttDeptDtlsHldr">
                        <div class="TableHldr">
                        <table class="AppDataTbl">
                                <tr class="Hdr">
                                    <th>
                                        <span class="DataTtl">S. No.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Emp. ID.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Employee Name</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Service Type</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Joined On</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Total Tasks Completed</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Avg. Task per Day</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Assigned Tasks</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Tasks In Process</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 1</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 2</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 3</span>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1001</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">N. Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1002</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Balu Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1200</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1003</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Deeraj</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1211</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1004</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1005</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Electrical</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>

                <div class="StffAttndDshb FullDetails">
                    <span class="DptTtl">Plumber</span>
                    <div class="StffAttndDshbHldr">
                        <div class="StffBscDtls">
                            <div class="StffImgHldr">
                                <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="StffImg Suprvsr" />
                            </div>
                            <div class="StffNmDtlsHldr">
                                <span class="StffNme Suprvsr">Ramu</span>
                                <span class="StffDsgntn">Dept. Plumber</span>
                            </div>
                        </div>
                        <div class="StffDshHghlgtHldr">
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 1</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 2</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 3</span>
                            </div>
                        </div>
                    </div>
                    <div class="AttDeptDtlsHldr">
                        <div class="TableHldr">
                        <table class="AppDataTbl">
                                <tr class="Hdr">
                                    <th>
                                        <span class="DataTtl">S. No.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Emp. ID.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Employee Name</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Service Type</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Joined On</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Total Tasks Completed</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Avg. Task per Day</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Assigned Tasks</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Tasks In Process</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 1</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 2</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 3</span>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1001</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">N. Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1002</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Balu Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1200</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1003</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Deeraj</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1211</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1004</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1005</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Electrical</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>

                <div class="StffAttndDshb FullDetails">
                    <span class="DptTtl">Electrician</span>
                    <div class="StffAttndDshbHldr">
                        <div class="StffBscDtls">
                            <div class="StffImgHldr">
                                <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="StffImg Suprvsr" />
                            </div>
                            <div class="StffNmDtlsHldr">
                                <span class="StffNme Suprvsr">Sudha Rao</span>
                                <span class="StffDsgntn">Dept. Electrician</span>
                            </div>
                        </div>
                        <div class="StffDshHghlgtHldr">
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 1</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 2</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 3</span>
                            </div>
                        </div>
                    </div>
                    <div class="AttDeptDtlsHldr">
                        <div class="TableHldr">
                        <table class="AppDataTbl">
                                <tr class="Hdr">
                                    <th>
                                        <span class="DataTtl">S. No.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Emp. ID.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Employee Name</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Service Type</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Joined On</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Total Tasks Completed</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Avg. Task per Day</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Assigned Tasks</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Tasks In Process</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 1</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 2</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 3</span>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1001</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">N. Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1002</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Balu Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1200</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1003</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Deeraj</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1211</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1004</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1005</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Electrical</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>

                <div class="StffAttndDshb FullDetails">
                    <span class="DptTtl">Janitors</span>
                    <div class="StffAttndDshbHldr">
                        <div class="StffBscDtls">
                            <div class="StffImgHldr">
                                <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="StffImg Suprvsr" />
                            </div>
                            <div class="StffNmDtlsHldr">
                                <span class="StffNme Suprvsr">Chinmay Kant</span>
                                <span class="StffDsgntn">Dept. Janitor</span>
                            </div>
                        </div>
                        <div class="StffDshHghlgtHldr">
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 1</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 2</span>
                            </div>
                            <div class="StffDshHghlgt Assgnd">
                                <span class="Count">5</span>
                                <span class="CntTtl">Shift 3</span>
                            </div>
                        </div>
                    </div>
                    <div class="AttDeptDtlsHldr">
                        <div class="TableHldr">
                            <table class="AppDataTbl">
                                <tr class="Hdr">
                                    <th>
                                        <span class="DataTtl">S. No.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Emp. ID.</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Employee Name</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Service Type</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Joined On</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Total Tasks Completed</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Avg. Task per Day</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Assigned Tasks</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Tasks In Process</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 1</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 2</span>
                                    </th>
                                    <th>
                                        <span class="DataTtl">Shift 3</span>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1001</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">N. Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1002</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Balu Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1200</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">2</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1003</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Deeraj</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1211</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">4</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1004</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Naik</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Supervisor</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">EMP-1005</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Raju</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">Electrical</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">18-01-2020</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1280</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">5</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">3</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">1</span>
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <img onclick="javascript:ModalPopup();" style="cursor: pointer; width: 20px; height: 20px;" src="<?= base_url('/public/wis_assets/Images/AppIcon-UserProfile-Grey.png'); ?>">
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="AppMdlHldr" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr LdrShpPrfl">
            <div class="ModalTtlHldr LdrshpTtl">
                <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="PrflImg TmImg">
                <span class="PrflName">Nivedita Kumari</span>
                <span class="PrflDsgntn">Medical Staff</span>
                <span class="PrflJnedDt">Joined on 21 June 2018</span>
                <span id="AppMdlClsBtn" onclick="javascript:ModalPopup();" class="ModalClsBtn"></span>
            </div>
            <div class="ModalCntntHldr LdrshpDtl">
                <div class="LdrPrfDtlsHldr">
                    <div class="PrfDtl">
                        <span class="PrflDtlTxt">EMP-8851-417</span>
                        <span class="PrflDtlTtl">Employee ID</span>
                    </div>
                    <div class="PrfDtl">
                        <span class="PrflDtlTxt">+91 XXXXX XXXXX</span>
                        <span class="PrflDtlTtl">Contact No.</span>
                    </div>
                    <div class="PrfDtl">
                        <span class="PrflDtlTxt">xxxxxx@xxxx.com</span>
                        <span class="PrflDtlTtl">Email ID</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
