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
                    <?php if(!empty(@$location)){
                        echo '<span class="PgHdrTtl1">'.@$location->RoomName.' <a href="'.base_url().'/complaints/add_complaint3_mob';
                        if(isset($_GET['BID']) && isset($_GET['BKID']) && isset($_GET['FID']) && isset($_GET['RID']) && isset($_GET['ComCatID'])){
                            echo '?BID='.$_GET['BID'].'&BKID='.$_GET['BKID'].'&FID='.$_GET['FID'].'&RID='.$_GET['RID'].'&ComCatID='.$_GET['ComCatID'];
                        }
                        echo '" class="float-end me-2"><i class="far fa-arrows-alt"></i></a></span>
                        <h1 class="PgHdrTtl2">'.@$location->FloorName.', '.@$location->BlockName.', '.@$location->BuildingName.'</h1>';
                    } ?>
                </div>
                <div class="PgInnrCntnt">
                    <?php if(!empty($complaint_category)){
                        echo '<div class="mb-3 CmpntPrt" style="padding: 15px;">
                            <img src="'.$complaint_category->CategoryIcon.'"/>
                            <span class="CmplntType ms-4">'.$complaint_category->CategoryName.'</span>
                        </div>';
                    } ?>
                    <form action="" method="post" enctype="multipart/form-data" id="AddComplaint3">
                        <input type="hidden" name="EmpID" value="<?= session('EmpID'); ?>"/>
                        <input type="hidden" name="BID" value="<?= $_GET['BID']; ?>"/>
                        <input type="hidden" name="BKID" value="<?= $_GET['BKID']; ?>"/>
                        <input type="hidden" name="FID" value="<?= $_GET['FID']; ?>"/>
                        <input type="hidden" name="RID" value="<?= $_GET['RID']; ?>"/>
                        <input type="hidden" name="ComCatID" value="<?= $_GET['ComCatID']; ?>"/>
                        <div class="row" id="ComplaintDiv">
                            <label class="CmpntInptTtl">Common Complaint</label>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <select class="form-control CmpntInptBx" id="ComNatID" name="ComNatID">
                                        <option disabled selected value hidden>Select Common Complaint</option>
                                        <?php if(!empty($complaints)){
                                            foreach($complaints as $key => $complaint){
                                                echo '<option value="'.$key.'">'.$complaint.'</option>';
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="CustomComplaint" name="CustomComplaint" placeholder="Add Custom Complaint"/>
                                    <label for="CustomComplaint" class="CmpntInptLbl">Add Custom Complaint</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="CmpntInptTtl">Add Images</label>
                                <div class="mb-3">
                                    <div class="UpdFle">+</div>
                                    <input type="file" multiple name="Images[]" class="d-none" id="AddImages"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="CmpntInptTtl">Complaint Priority</label>
                                <div class="mb-3 CmpntPrt" style="padding: 20px;">
                                    <div class="row">
                                        <?php if(!empty($priorities)){
                                            foreach($priorities as $key => $priority){
                                                echo '<div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Priority" id="Priority'.$key.'" value="'.$key.'">
                                                        <label class="form-check-label CmplntType" for="Priority'.$key.'">'.$priority.'</label>
                                                    </div>
                                                </div>';
                                            } 
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="CmpntInptTtl">Complaint Raised By (Optional)</label>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Name" name="Name" placeholder="Name"/>
                                    <label for="Name" class="CmpntInptLbl">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Mobile" name="Mobile" placeholder="Phone Number (+91)"/>
                                    <label for="Mobile" class="CmpntInptLbl">Phone Number (+91)</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="CmpntInptTtl">Complaint Remarks</label>
                            <div class="col-md-12" id="RemarksDiv">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control CmpntInptBx" placeholder="Add description" id="Remarks" name="Remarks"></textarea>
                                    <label for="Remarks" class="CmpntInptLbl">Add Remarks</label>
                                </div>
                            </div>
                        </div>
                        <div class="CmplntBtnBlk" style="text-align: center">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $( ".UpdFle" ).click(function() {
            $("#AddImages").click();
        });
        $("form[id='AddComplaint3']").validate({
            ignore: [],
            rules: {
                ComNatID: {
                    required : function(element) {
                        if($("#ComNatID").val() == null && $("#CustomComplaint").val() == '') { 
                            return true;
                        } else {
                            return false;
                        }
                    }
                },
                Remarks: "required",
            },
            messages: {
                ComNatID: "Please select Common Complaint or enter Custom Complaint",
                Remarks: "Please enter complaint remarks",
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "ComNatID") {
                    error.insertAfter("#ComplaintDiv");
                } else if(element.attr("name") == "Remarks") {
                    error.insertAfter("#RemarksDiv");
                }else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                form.sibmit();
            }
        });
    </script>
</body>
</html>
