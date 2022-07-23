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
                    <span class="PgHdrTtl1">Waiting Hall -1</span>
                    <h1 class="PgHdrTtl2">Floor 2, Block - A, ESIC Hospital</h1>
                    <span class="icon-fullscreen"></span>
                </div>
                <div class="PgInnrHdr">
                    <span class="PgInnrTtl">Please select from below to raise complaint<span>
                </div>
                <div class="PgInnrCntnt">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Heating/ Cooling</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Water</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Drinking Water</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Cleanliness</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Equipment</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Damages</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Tissues</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Soap</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row CmplntTypBlk">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                                </div>
                                <div class="col-sm-8 my-auto">
                                    <span class="CmplntType">Others</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CmplntBtnBlk" style="text-align: center">
                        <button type="button" class="btn">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
