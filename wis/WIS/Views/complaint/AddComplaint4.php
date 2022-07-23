<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet_1.css?ver=1" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
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
            <div class="InnrPg">
                <div class="PgHdr">
                    <span class="PgHdrTtl1">Thank You!</span>
                    <h1 class="PgHdrTtl2">Your complaint has been recorded.</h1>
                    <span class="icon-fullscreen"></span>
                </div>
                <div class="PgInnrCntnt">
                    <div class="CmpntInptBlk CmpntPrt" style="padding: 15px;">
                        <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                        <span class="CmplntType ms-4">Heating/ Cooling</span>
                    </div>
                    <!--<ol class="steps">
                        <li class="step is-active" data-step="1">
                            Step 1
                        </li>
                        <li class="step" data-step="2">
                            Step 2
                        </li>
                        <li class="step" data-step="3">
                            Step 3
                        </li>
                    </ol>-->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="CmpntInptTtl">Location</label>
                            <div class="CmpntInptBlk">
                                <input type="text" class="form-control CmpntInptBx" id="Location" placeholder="Location" value="Waiting Hall, Floor 2, Block - A, ESIC Hospital"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="CmpntInptTtl">Nature of Complaint</label>
                            <div class="CmpntInptBlk">
                                <input type="text" class="form-control CmpntInptBx" id="Nature" placeholder="Nature of Complaint" value="Temperature too Hot"/>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="CmpntInptTtl">Images</label>
                            <div class="CmpntInptBlk">
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint1.png'); ?>" class="CmpltImg"/>
                                <img src="<?= base_url('/public/wis_assets/Images/Complaint2.png'); ?>" class="CmpltImg"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="CmpntInptTtl">Complaint Priority</label>
                            <div class="CmpntInptBlk CmpntPrt" style="padding: 20px;">
                                <span class="SlctdPrt">High</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="CmpntInptTtl">Complaint Raised By (Optional)</label>
                        <div class="col-md-4">
                            <div class="form-floating CmpntInptBlk">
                                <input type="text" class="form-control CmpntInptBx" id="Name" placeholder="Name" value="Rajkumar Malik"/>
                                <label for="Name" class="CmpntInptLbl">Name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating CmpntInptBlk">
                                <input type="text" class="form-control CmpntInptBx" id="PhoneNo" placeholder="Phone Number (+91)" value="Rajkumar Malik"/>
                                <label for="PhoneNo" class="CmpntInptLbl">Phone Number (+91)</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="CmpntInptBlk">
                                <select class="form-control CmpntInptBx" id="Select Designation">
                                    <option>Select Designation</option>
                                    <option selected>Patient</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="CmpntInptTtl">Complaint Remarks</label>
                        <div class="col-md-12">
                            <div class="CmpntInptBlk">
                                <textarea class="form-control CmpntInptBx" placeholder="Add description" id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="CmplntBtnBlk" style="text-align: center">
                        <button type="button" class="btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
