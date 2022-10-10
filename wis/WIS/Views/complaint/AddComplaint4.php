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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet_1.css?ver=1" rel="stylesheet" />
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
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
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>/complaintAttendence" class="LnkTxt">Man Power</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintDashboard" class="LnkTxt">Complaints Dashboard</a>
                    </li> -->
                </ul>
            </div>
            <!-- <div class="SctnInnerMenu" style="margin-top: 0;">
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
            </div> -->
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
                    <?php
                        $url = base_url().'/complaints/add_complaint4_mob';
                        if(isset($_GET['ComID']) && isset($_GET['ComCatID'])){
                            $url .= '?ComID='.$_GET['ComID'].'&ComCatID='.$_GET['ComCatID'];
                        }
                        $url .= '"';
                    ?>
                    <span class="PgHdrTtl1">Thank You! <a href="<?= $url; ?>" class="float-end me-2"><i class="far fa-arrows-alt"></i></a></span>
                    <h1 class="PgHdrTtl2">Your complaint has been recorded.</h1>
                </div>
                <div class="PgInnrCntnt">
                    <?php if(!empty($complaint_category)){
                        echo '<div class="mb-3 CmpntPrt">
                            <img src="'.$complaint_category->CategoryIcon.'"/>
                            <span class="CmplntType ms-4">'.$complaint_category->CategoryName.'</span>
                        </div>';
                    } ?>
                    <ul class="progressbar">
                        <?php if(!empty($complaint_status)){
                            foreach($complaint_status as $key => $status){
                                echo ' <li ';
                                if($status == @$complaint->StausName)
                                    echo 'class="active"';
                                echo '>'.$status.'</li>';
                            }
                        } ?>
                    </ul>
                    <?php if(!empty($complaint)){
                        echo '<div class="row">
                            <div class="col-md-6">
                                <label class="FrmLbl">Location</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control InptBx" id="Location" placeholder="Location" value="'.$complaint->RoomName.', '.$complaint->FloorName.', '.$complaint->BuildingName.'" readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="FrmLbl">Nature of Complaint</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control InptBx" id="Nature" placeholder="Nature of Complaint" value="'.$complaint->ComplaintNature.'" readonly/>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="FrmLbl">Images</label>
                                <div class="mb-3">';
                                if(isset($complaint_images)){
                                    foreach($complaint_images as $Image){
                                        echo '<img src="'.$Image->Image.'" class="CmpltImg" onclick="javascript:ModalPopup();"/>';
                                    }
                                } 
                                echo '</div>
                            </div>
                            <div class="col-md-6">
                                <label class="FrmLbl">Complaint Priority</label>';
                                if($complaint->Priority != ''){
                                    echo '<div class="mb-3 CmpntPrt">
                                        <span class="SlctdPrt">'.$complaint->Priority.'</span>
                                    </div>';
                                }
                            echo '</div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="FrmLbl">Complaint Raised By</label>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="RaisedBy" placeholder="Raised By" value="'.$complaint->ComplaintRaisedBy.'" readonly/>
                                    <label for="RaisedBy" class="CmpntInptLbl">Raised By</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="Name" placeholder="Name" value="'.$complaint->Name.'" readonly/>
                                    <label for="Name" class="CmpntInptLbl">Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="PhoneNo" placeholder="Phone Number (+91)" value="'.$complaint->Mobile.'" readonly/>
                                    <label for="PhoneNo" class="CmpntInptLbl">Phone Number (+91)</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="FrmLbl">Complaint Remarks</label>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control InptBx" placeholder="Remarks" id="Remarks" readonly>'.$complaint->ComplaintRemarks.'</textarea>
                                    <label for="Remarks" class="CmpntInptLbl">Remarks</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="FrmLbl">Complaint Assigned To</label>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="AssignedBy" placeholder="Assigned To" value="'.$complaint->AssignedBy.'" readonly/>
                                    <label for="Assigned To" class="CmpntInptLbl">Assigned To</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="Name" placeholder="Department" value="'.$complaint->DeptName.'" readonly/>
                                    <label for="Department" class="CmpntInptLbl">Department</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="PhoneNo" placeholder="Assigned Time" value="'.$complaint->AssignedTime.'" readonly/>
                                    <label for="AssignedTime" class="CmpntInptLbl">Assigned Time</label>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <label class="FrmLbl">Complaint Material</label>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="Material" placeholder="Material" value="'.$complaint->Material.'" readonly/>
                                    <label for="Material" class="CmpntInptLbl">Material</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control InptBx" id="AssignedNote" placeholder="AssignedNote" value="'.$complaint->AssignedNote.'" readonly/>
                                    <label for="AssignedNote" class="CmpntInptLbl">AssignedNote</label>
                                </div>
                            </div>
                           
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="FrmLbl">After Images</label>
                                <div class="mb-3">';
                                if(isset($complaint_AfterImages)){
                                    foreach($complaint_AfterImages as $Image){
                                        echo '<img src="'.$Image->AfterImage.'" class="CmpltImg" onclick="javascript:ModalPopupTwo();"/>';
                                    }
                                } 
                                echo '</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="FrmLbl">Completed Date</label>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control InptBx" placeholder="CompletedDateTime" id="CompletedDateTime" readonly>'.$complaint->CompletedDateTime.'</textarea>
                                    <label for="Completed Date" class="CmpntInptLbl">Completed Date</label>
                                </div>
                            </div>
                        </div>';
                        
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(!empty($complaint_images)){
        echo '<div id="AppMdlHldr" class="AppModalHldr Hide">
            <div class="AppModalInnrHldr Smllr">
                <div class="ModalTtlHldr">
                    <div class="ModalTtlHldr">
                        <span class="SctnTtl">';
                        if($Mode == 1) echo 'Assigned Complaint Images'; else echo 'In Process Complaint Images'; 
                        echo '</span>
                        <span class="FtrTtl">'.$complaint->CategoryName.'</span>
                        <span id="AppMdlClsBtn" onclick="javascript:ModalPopup();" class="ModalClsBtn"></span>
                    </div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">';
                            foreach($complaint_images as $key => $image){
                                echo '<div class="carousel-item';
                                if($key == 0) echo ' active';
                                echo '">
                                    <img src="'.$image->Image.'" class="d-block w-100" alt="CompImg'.$key.'" style="height:600px">
                                </div>';
                            }
                        echo '</div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>';
    } ?>
    <?php if(!empty($complaint_AfterImages)){
        echo '<div id="AppMdlHldrTwo" class="AppModalHldr Hide">
            <div class="AppModalInnrHldr Smllr">
                <div class="ModalTtlHldr">
                    <div class="ModalTtlHldr">
                        <span class="SctnTtl">';
                        if($Mode == 1) echo 'Assigned Complaint Images'; else echo 'In Process Complaint Images'; 
                        echo '</span>
                        <span class="FtrTtl">'.$complaint->CategoryName.'</span>
                        <span id="AppMdlClsBtn" onclick="javascript:ModalPopupTwo();" class="ModalClsBtn"></span>
                    </div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">';
                            foreach($complaint_AfterImages as $key => $image){
                                echo '<div class="carousel-item';
                                if($key == 0) echo ' active';
                                echo '">
                                    <img src="'.$image->AfterImage.'" class="d-block w-100" alt="CompImg'.$key.'" style="height:600px">
                                </div>';
                            }
                        echo '</div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>';
    } ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</html>
