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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    </head>
    <body style="background-color: #FFFFFF; overflow-y: auto;">
        <div class="InnrPg">
            <div class="PgHdr">
                <span class="PgHdrTtl1">Thank You!</span>
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
                                    echo '<img src="'.$Image->Image.'" class="CmpltImg"/>';
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
                    </div>';
                } ?>
            </div>
        </div>
    </body>
</html>