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
                    <span class="PgHdrTtl1">Select Location <a href="<?= base_url('/complaints/add_complaint_mob'); ?>" class="float-end me-2"><i class="far fa-arrows-alt"></i></a></span>
                </div>
                <!-- <div class="PgInnrHdr">
                    <span class="AdrsTxt">Organization : <?= (session('OrgName') ? session('OrgName'): '') ?></span>
                </div> -->
                <div class="PgInnrCntnt">
                    <form action="<?= base_url('complaints/add_complaint2'); ?>" method="get" id="AddComplaint1">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="BID" class="FrmLbl">Building Name</label>
                                <select class="form-select InptBx" id="BID" name="BID">
                                    <option disabled selected value hidden>Select Building Name</option>
                                    <?php if(!empty($buildings)){
                                        foreach($buildings as $building){
                                            echo '<option value="'.$building->BID.'">'.$building->BuildingName.' ('.$building->BrName.')</option>';
                                        } 
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="FID" class="FrmLbl">Floor Name/ Number</label>
                                <select class="form-select InptBx" id="FID" name="FID">
                                    <option disabled selected value hidden>Select Floor Name/ Number</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="RID" class="FrmLbl">Room Name/ Number</label>
                                <select class="form-select InptBx" id="RID" name="RID">
                                    <option disabled selected value hidden>Select Room Name/ Number</option>
                                </select>
                            </div>
                        </div>
                        <div class="CmplntBtnBlk" style="text-align: center">
                            <button type="submit" class="btn">Raise Complaint</button>
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
        $('#BID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getfloorsbybuilding') ?>", {BuildingID: $(this).val()}, function(data, status){
                    var floors = '<option disabled selected value hidden>Select Floor Name/ Number</option>';
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
                    var rooms = '<option disabled selected value hidden>Select Room Name/ Number</option>';
                    $.each(data, function (i, field) {
                        rooms += '<option value="'+field.RID+'">'+field.RoomName+'</option>';
                    });
                    $('#RID').html(rooms);
                });
            }
        });
        $("form[id='AddComplaint1']").validate({
            ignore: [],
            rules: {
                BID: "required",
                FID: "required",
                RID: "required",
            },
            messages: {
                BID: "Please select Building Name",
                FID: "Please select Floor Name/ Number",
                RID: "Please select Room Name/ Number",
            },
            submitHandler: function(form) {
                form.sibmit();
            }
        });
    </script>
</body>
</html>
