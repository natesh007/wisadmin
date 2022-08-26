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
                <?php if(!empty(@$location)){
                    echo '<span class="PgHdrTtl1">'.@$location->RoomName.'</span>
                    <h1 class="PgHdrTtl2">'.@$location->FloorName.', '.@$location->BuildingName.'</h1>';
                } ?>
            </div>
            <div class="PgInnrCntnt">
                <?php if(!empty($complaint_category)){
                    echo '<div class="mb-3 CmpntPrt">
                        <img src="'.$complaint_category->CategoryIcon.'"/>
                        <span class="CmplntType ms-4">'.$complaint_category->CategoryName.'</span>
                    </div>';
                } ?>
                <form action="" method="post" enctype="multipart/form-data" id="AddComplaint3">
                    <input type="hidden" name="EmpID" value="<?= session('EmpID'); ?>"/>
                    <input type="hidden" name="BID" value="<?= $_GET['BID']; ?>"/>
                    <input type="hidden" name="FID" value="<?= $_GET['FID']; ?>"/>
                    <input type="hidden" name="RID" value="<?= $_GET['RID']; ?>"/>
                    <input type="hidden" name="ComCatID" value="<?= $_GET['ComCatID']; ?>"/>
                    <div class="row" id="ComplaintDiv">
                        <label class="FrmLbl">Raise Complaint</label>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="mb-3">
                                        <select class="form-select InptBx" id="ComNatID" name="ComNatID">
                                            <option disabled selected value hidden>Select Complaint</option>
                                            <?php if(!empty($complaints)){
                                                foreach($complaints as $key => $complaint){
                                                    echo '<option value="'.$key.'">'.$complaint.'</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center my-auto">
                                    <label class="FrmLbl">OR</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control InptBx" id="CustomComplaint" name="CustomComplaint" placeholder="Add Custom Complaint"/>
                                <label for="CustomComplaint" class="CmpntInptLbl">Add Custom Complaint</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="FrmLbl">Add Images</label>
                            <div class="mb-3">
                                <!-- <div class="UpdFle">+</div> -->
                                <input type="file" multiple name="Images[]" id="AddImages" class="form-control InptBx" style="padding: 10px"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="FrmLbl">Complaint Priority</label>
                            <div class="mb-3 CmpntPrt">
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
                        <label class="FrmLbl">Complaint Raised By</label>
                        <div class="col-md-4 mb-3">
                            <select class="form-select InptBx" id="RaisedBy" name="RaisedBy">
                                <option disabled selected value hidden>Select Complaint Raised By</option>
                                <option value="Employee">Employee</option>
                                <option value="Customer">Customer</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control InptBx" id="Name" name="Name" placeholder="Name"/>
                                <label for="Name" class="CmpntInptLbl">Name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control InptBx" id="Mobile" name="Mobile" placeholder="Phone Number (+91)"/>
                                <label for="Mobile" class="CmpntInptLbl">Phone Number (+91)</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="FrmLbl">Complaint Remarks</label>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control InptBx" placeholder="Add Remarks" id="Remarks" name="Remarks"></textarea>
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
    </body>
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
                RaisedBy: 'required',
            },
            messages: {
                ComNatID: "Please select complaint or enter custom complaint",
                RaisedBy: "Please select complaint raised by"
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "ComNatID") {
                    error.insertAfter("#ComplaintDiv");
                }else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                form.sibmit();
            }
        });
    </script>
</html>