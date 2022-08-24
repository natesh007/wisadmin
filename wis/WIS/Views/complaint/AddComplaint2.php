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
                    <?php if(!empty(@$categories->location)){
                        echo '<span class="PgHdrTtl1">'.@$categories->location->RoomName.' <a href="'.base_url().'/complaints/add_complaint2_mob';
                        if(isset($_GET['BID']) && isset($_GET['BKID']) && isset($_GET['FID']) && isset($_GET['RID'])){
                            echo '?BID='.$_GET['BID'].'&BKID='.$_GET['BKID'].'&FID='.$_GET['FID'].'&RID='.$_GET['RID'];
                        }
                        echo '" class="float-end me-2"><i class="far fa-arrows-alt"></i></a></span>
                        <h1 class="PgHdrTtl2">'.@$categories->location->FloorName.', '.@$categories->location->BlockName.', '.@$categories->location->BuildingName.'</h1>';
                    } ?>
                </div>
                <div class="PgInnrHdr">
                    <span class="PgInnrTtl">Please select from below to raise complaint<span>
                </div>
                <div class="PgInnrCntnt">
                    <form action="<?= base_url('complaints/add_complaint3'); ?>" method="get" id="AddComplaint2">
                        <input type="hidden" name="BID" value="<?= $_GET['BID']; ?>"/>
                        <input type="hidden" name="BKID" value="<?= $_GET['BKID']; ?>"/>
                        <input type="hidden" name="FID" value="<?= $_GET['FID']; ?>"/>
                        <input type="hidden" name="RID" value="<?= $_GET['RID']; ?>"/>
                        <div class="row" id="NatureDiv">
                            <?php if(!empty(@$categories->data)){
                                foreach($categories->data as $category){
                                    echo '<div class="col-md-2 col-6 mb-3">
                                        <div class="row CmplntTypBlk" var="'.$category->ComCatID.'">
                                            <div class="col-md-3 text-center my-auto">
                                                <img src="'.$category->CategoryIcon.'"/>
                                            </div>
                                            <div class="col-md-9 my-auto text-break">
                                                <span class="CmplntType">'.$category->CategoryName.'</span>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            } ?>
                        </div>
                        <input type="hidden" name="ComCatID" id="ComCatID" value=""/>
                        <div class="CmplntBtnBlk" style="text-align: center">
                            <button type="submit" class="btn">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $( ".CmplntTypBlk" ).click(function() {
            $(".CmplntTypBlk").css("background", "#FFFFFF");
            $(".CmplntTypBlk").find("span.CmplntType").css("color", "#4E4B4B");
            $(this).css("background", "#0078BB");
            $(this).find("span.CmplntType").css("color", "#FFFFFF");
            $("#ComCatID").val($(this).attr('var'));
        });
        $("form[id='AddComplaint2']").validate({
            ignore: [],
            rules: {
                ComCatID: "required"
            },
            messages: {
                ComCatID: "Please select Complaint Nature"
            },
            submitHandler: function(form) {
                form.sibmit();
            }
        });
    </script>
</html>
