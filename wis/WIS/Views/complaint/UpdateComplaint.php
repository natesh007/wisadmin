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
            <?php if(session('ErrMsg') != '')                               
                echo '<div class="alert alert-danger alert-dismissible" role="alert" class="w-90 m-auto">
                    '.session('ErrMsg').'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            ?>
            <div class="SrchFltrDv ChckLst">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <span class="InnrTtl">Date</span>
                            <span class="InnrTxt"><?= $complaint->CreatedDate ?></span>
                        </div>
                        <div class="col-md-2">
                            <span class="InnrTtl">Building</span>
                            <span class="InnrTxt"><?= $complaint->BuildingName ?></span>
                        </div>
                        <div class="col-md-2">
                            <span class="InnrTtl">Block</span>
                            <span class="InnrTxt"><?= $complaint->BlockName ?></span>
                        </div>
                        <div class="col-md-2">
                            <span class="InnrTtl">Floor</span>
                            <span class="InnrTxt"><?= $complaint->FloorName ?></span>
                        </div>
                        <div class="col-md-2">
                            <span class="InnrTtl">Room</span>
                            <span class="InnrTxt"><?= $complaint->RoomName ?></span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php if($Mode == 1){
                echo '<form action="" method="post" id="AssingComplaint">
                    <input type="hidden" name="ComID" value="'.$ComID.'" />
                    <input type="hidden" name="ComplaintStatus" value="2" />
                    <div class="ModalCntntHldr">
                        <div class="SrchFltrDv ChckLst" style="background: #fff6ff; border-color: #e7bde7;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Complaint by</span>
                                        <span class="InnrTxt">';
                                        if($complaint->empid == 0) echo 'Patient'; else echo 'Employee';
                                        echo '</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Complaint Time</span>
                                        <span class="InnrTxt Bad">03:00 PM (+2 Hour)</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Patient Name</span>
                                        <span class="InnrTxt">'.$complaint->Name.'</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Contact No.</span>
                                        <span class="InnrTxt">';
                                        if($complaint->Mobile != '') echo '+91 '.$complaint->Mobile; else echo '';
                                        echo '</span>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="DeptID" id="DeptID" class="form-select InptBx">
                                            <option disabled selected value hidden>Department</option>';
                                            foreach($departments as $department) {
                                                echo '<option value="'.$department->DeptID.'">'.$department->DeptName.'</option>';
                                            }
                                        echo '</select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="EmpTbl">
                        </div>
                        <span id="EmpErr"></span>
                        <!--<div class="ModalFnctnHldr" style="background: #fff;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="InnrTtl">Recommended To</span>
                                        <span class="InnrTxt">N. Raju (EMP-1001)</span>
                                    </div>
                                </div>
                            </div>
                        </div>-->';
                        if(!empty($images)){
                            echo '<div class="CmpltImgBlk">
                                <div class="container-fluid">
                                    <div class="col-md-12">';
                                        foreach($images as $image){
                                            echo '<img src="'.$image->Image.'" class="CmpltImg" onclick="javascript:ModalPopup();"/>';
                                        }
                                    echo '</div>
                                </div>
                            </div>';
                        } if($complaint->ComplaintRemarks != ''){
                            echo '<div class="CmpltDescBlk">
                                <div class="container-fluid">
                                    <div class="col-md-12">
                                        <p>
                                            <span class="CmpltDesHed">Description : </span> '.$complaint->ComplaintRemarks.'
                                        </p>
                                    </div>
                                </div>
                            </div>';
                        }
                        echo '<div class="AssBtnHldr">
                            <button type="submit" class="btn btn-primary SbmtBtn">Assign</button>
                        </div>
                    </div>
                </form>';
            }else{
                echo '<form action="" method="post" id="InprocessComplaint">
                    <input type="hidden" name="ComID" value="'.$ComID.'" />
                    <div class="ModalCntntHldr">
                        <div class="SrchFltrDv ChckLst" style="background: #fff6ff; border-color: #e7bde7;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Complaint by</span>
                                        <span class="InnrTxt">';
                                        if($complaint->empid == 0) echo 'Patient'; else echo 'Employee';
                                        echo '</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Complaint Time</span>
                                        <span class="InnrTxt Bad">03:00 PM (+2 Hour)</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Patient Name</span>
                                        <span class="InnrTxt">'.$complaint->Name.'</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="InnrTtl">Contact No.</span>
                                        <span class="InnrTxt">';
                                        if($complaint->Mobile != '') echo '+91 '.$complaint->Mobile; else echo '';
                                        echo '</span>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="DeptID" id="DeptID" class="form-select InptBx">
                                            <option disabled selected value hidden>Department</option>';
                                            foreach($departments as $department) {
                                                echo '<option value="'.$department->DeptID.'">'.$department->DeptName.'</option>';
                                            }
                                        echo '</select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SrchFltrDv ChckLst" style="background: #ecffe6; border-color: #81e562;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span class="InnrTtl">Assigned To</span>
                                        <span class="InnrTxt">'.$complaint->AssignedBy.'</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="InnrTtl">Assigned Time</span>
                                        <span class="InnrTxt">'.$complaint->UpdatedDate.'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SrchFltrDv ChckLst" style="background: #fff;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control InptBx" id="Note" name="Note" placeholder="Notes">
                                    </div>
                                    <div class="col-md-3">
                                        <span class="InnrTtl">Status</span>
                                        <div class="form-check CompSts">
                                            <input class="form-check-input" type="radio" name="ComplaintStatus" value="2" id="ComplaintStatus1">
                                            <label class="form-check-label" for="ComplaintStatus1">Pending</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="InnrTtl">&nbsp;</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ComplaintStatus" value="3" id="ComplaintStatus2">
                                            <label class="form-check-label" for="ComplaintStatus2">Complete</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        if(!empty($images)){
                            echo '<div class="CmpltImgBlk">
                                <div class="container-fluid">
                                    <div class="col-md-12">';
                                        foreach($images as $image){
                                            echo '<img src="'.$image->Image.'" class="CmpltImg" onclick="javascript:ModalPopup();"/>';
                                        }
                                    echo '</div>
                                </div>
                            </div>';
                        } if($complaint->ComplaintRemarks != ''){
                            echo '<div class="CmpltDescBlk">
                                <div class="container-fluid">
                                    <div class="col-md-12">
                                        <p>
                                            <span class="CmpltDesHed">Description : </span> '.$complaint->ComplaintRemarks.'
                                        </p>
                                    </div>
                                </div>
                            </div>';
                        }
                        echo '<div class="AssBtnHldr">
                            <button type="submit" class="btn btn-primary SbmtBtn">Assign</button>
                        </div>
                    </div>
                </form>';
            } ?>
        </div>
    </div>
    <?php if(!empty($images)){
        echo '<div id="AppMdlHldr" class="AppModalHldr Hide">
            <div class="AppModalInnrHldr Smllr">
                <div class="ModalTtlHldr">
                    <div class="ModalTtlHldr">
                        <span class="SctnTtl">';
                        if($Mode == 1) echo 'Assigned Complaint Images'; else echo 'In Process Complaint Imagesss'; 
                        echo '</span>
                        <span class="FtrTtl">'.$complaint->CategoryName.'</span>
                        <span id="AppMdlClsBtn" onclick="javascript:ModalPopup();" class="ModalClsBtn"></span>
                    </div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">';
                            foreach($images as $key => $image){
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).on("change", "#DeptID", function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getemployeesbydepartment') ?>", {DeptID: $(this).val()}, function(data, status){
                    var employees = '<div class="TableHldr"><table class="AppDataTbl"><tr class="Hdr"><th></th><th><span class="DataTtl">Emp. ID.</span></th><th><span class="DataTtl">Employee Name</span></th><th><span class="DataTtl">Contact No.</span></th><th><span class="DataTtl">Shift Timing</span></th><th><span class="DataTtl">Assigned</span></th><th><span class="DataTtl">In Progress</span></th><th><span class="DataTtl">Total Task Completed</span></th></tr>';
                    if(data != null){
                        $.each(data, function (i, field) {
                            employees += '<tr><td class="Cntr"><div class="form-check"><input class="form-check-input EmpID" type="radio" name="EmpID" value="'+field.EmpID+'"></div></td><td><span class="DataTxt">'+field.EmpID+'</span></td><td><span class="DataTxt">'+field.EmpName+'</span></td><td><span class="DataTxt">+91 '+field.Mobile+'</span></td><td><span class="DataTxt">'+field.Shift+'</span></td><td><span class="DataTxt">'+field.Assigned+'</span></td><td><span class="DataTxt">'+field.InProcess+'</span></td><td><span class="DataTxt">'+field.Completed+'</span></td></tr>';
                        });
                    }else{
                        employees += '<tr><td colspan="7" style="text-align:center"><span class="DataTxt">No data found.</span></td></tr>';
                    }
                    employees += '</table></div>';
                    $('#EmpTbl').html(employees);
                });
            }
        });
        $("form[id='AssingComplaint']").validate({
            ignore: [],
            rules: {
                DeptID: "required",
                EmpID: "required",
            },
            messages: {
                EmpID: "Please select Employee",
                DeptID: "Please select Department"
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "EmpID") {
                    error.insertAfter("#EmpTbl");
                    $("#EmpErr").hide();
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                if($(".EmpID").length > 0){
                    form.submit();
                }else{
                    $("#EmpErr").html('<label class="error">Please wait for employees list</label>');
                }
            }
        });
        $("form[id='InprocessComplaint']").validate({
            ignore: [],
            rules: {
                ComplaintStatus: "required"
            },
            messages: {
                ComplaintStatus: "Please select Status"
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "ComplaintStatus") {
                    error.insertAfter(".CompSts");
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {  
                form.submit();
            }
        });
    </script>
</body>
</html>