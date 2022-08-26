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
    <body style="background-color: #FFFFFF; overflow-y: auto;">
        <div class="InnrPg">
            <div class="PgHdr">
                <span class="PgHdrTtl1">Select Location</span>
            </div>
            <div class="PgInnrCntnt">
                <form action="<?= base_url('complaints/add_complaint2_mob'); ?>" method="get" id="AddComplaint1">
                    <?php if($OrgID != '' && $BID != '' && $FID != '' && $RID != ''){
                        echo '<div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="OrgID" class="FrmLbl">Organization</label>
                                <input type="text" class="form-control InptBx" value="'.$info->OrgName.'" readonly>
                                <input type="hidden" id="OrgID" name="OrgID" value="'.$OrgID.'">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="BID" class="FrmLbl">Building Name</label>
                                <input type="text" class="form-control InptBx" value="'.$info->BuildingName.'" readonly>
                                <input type="hidden" id="BID" name="BID" value="'.$BID.'">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="FID" class="FrmLbl">Floor Name/ Number</label>
                                <input type="text" class="form-control InptBx" value="'.$info->FloorName.'" readonly>
                                <input type="hidden" id="FID" name="FID" value="'.$FID.'">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="RID" class="FrmLbl">Room Name/ Number</label>
                                <input type="text" class="form-control InptBx" value="'.$info->RoomName.'" readonly>
                                <input type="hidden" id="RID" name="RID" value="'.$RID.'">
                            </div>
                        </div>';
                    }else {
                        echo '<div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="OrgID" class="FrmLbl">Organization</label>
                                <select class="form-select InptBx" id="OrgID" name="OrgID">
                                    <option disabled selected value hidden>Select Organization</option>';
                                    if(!empty($organizations)){
                                        foreach($organizations as $organization){
                                            echo '<option value="'.$organization->OrgID.'">'.$organization->OrgName.'</option>';
                                        } 
                                    }
                                echo '</select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="BID" class="FrmLbl">Building Name</label>
                                <select class="form-select InptBx" id="BID" name="BID">
                                    <option disabled selected value hidden>Select Building Name</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="FID" class="FrmLbl">Floor Name/ Number</label>
                                <select class="form-select InptBx" id="FID" name="FID">
                                    <option disabled selected value hidden>Select Floor Name/ Number</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="RID" class="FrmLbl">Room Name/ Number</label>
                                <select class="form-select InptBx" id="RID" name="RID">
                                    <option disabled selected value hidden>Select Room Name/ Number</option>
                                </select>
                            </div>
                        </div>';
                    } ?>
                    <div class="CmplntBtnBlk" style="text-align: center">
                        <button type="submit" class="btn">Raise Complaint</button>
                    </div>
                </form>
            </div>
        </div>
    </body> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>  
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $('#OrgID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/complaints/getbuildingsbyorganization') ?>", {OrgID: $(this).val()}, function(data, status){      
                    var buildings = '<option disabled selected value hidden>Select Building Name</option>';
                    $.each(data, function (i, field) {
                        buildings += '<option value="'+field.BID+'">'+field.BuildingName+' ('+field.BrName+')</option>';
                    });
                    $('#BID').html(buildings);
                });
            }
        });
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
                    var rooms = '<option disabled selected value hidden>Select Room sName/ Number</option>';
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
                OrgID: "required",
                BID: "required",
                FID: "required",
                RID: "required",
            },
            messages: {
                OrgID: "Please select Organization",
                BID: "Please select Building Name",
                FID: "Please select Floor Name/ Number",
                RID: "Please select Room Name/ Number",
            },
            submitHandler: function(form) {
                form.sibmit();
            }
        });
    </script>
</html>