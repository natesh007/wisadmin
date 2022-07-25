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
    <body style="background-color: #FFFFFF; overflow-y: auto;">
        <div class="InnrPg">
            <div class="PgHdr">
                <span class="PgHdrTtl1">Enter Address of Area to Raise a Complaint</span>
            </div>
            <div class="PgInnrHdr">
                <span class="AdrsTxt">Address</span>
                <a class="ChngAdrTxt" href="">Change Address</a>
            </div>
            <div class="PgInnrCntnt">
                <div class="row">
                    <div class="col-md-4">
                        <label class="CmpntInptTtl">Contact Info</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control CmpntInptBx" id="Name" placeholder="Name"/>
                            <label for="Name" class="CmpntInptLbl">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control CmpntInptBx" id="PhoneNo" placeholder="Phone Number (+91)"/>
                            <label for="PhoneNo" class="CmpntInptLbl">Phone Number (+91)</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label class="CmpntInptTtl">Contact Info</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Building" placeholder="Building/ Apartment Name/ House No."/>
                                    <label for="Building" class="CmpntInptLbl">Building/ Apartment Name/ House No.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Block" placeholder="Block No."/>
                                    <label for="Block" class="CmpntInptLbl">Block No.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Floor" placeholder="Floor No."/>
                                    <label for="Floor" class="CmpntInptLbl">Floor No.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Room" placeholder="Room Name/ No."/>
                                    <label for="Room" class="CmpntInptLbl">Room Name/ No.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control CmpntInptBx" id="Locality" placeholder="Locality/ Area / Street"/>
                                    <label for="Locality" class="CmpntInptLbl">Locality/ Area / Street</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="CmplntBtnBlk" style="text-align: center">
                    <a href="<?= base_url('complaints/add_complaint2_mob'); ?>"><button type="button" class="btn">Raise Complaint</button></a>
                </div>
            </div>
        </div>
    </body>
</html>