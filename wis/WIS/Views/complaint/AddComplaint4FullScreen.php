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
                <span class="PgHdrTtl1">Thank You!</span>
                <h1 class="PgHdrTtl2">Your complaint has been recorded.</h1>
                <span class="icon-fullscreen"></span>
            </div>
            <div class="PgInnrCntnt">
                <div class="mb-3 CmpntPrt" style="padding: 15px;">
                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                    <span class="CmplntType ms-4">Heating/ Cooling</span>
                </div>
                <!--<ol class="steps">
                    <li class="step is-active" data-step="1">
                        Step 1
                    </li>
                    <li class="step" data-step="2">
                        Step 2
                    </li>
                    <li class="step" data-step="3">
                        Step 3
                    </li>
                </ol>-->
                <div class="row">
                    <div class="col-md-6">
                        <label class="CmpntInptTtl">Location</label>
                        <div class="mb-3">
                            <input type="text" class="form-control CmpntInptBx" id="Location" placeholder="Location" value="Waiting Hall, Floor 2, Block - A, ESIC Hospital" readonly/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="CmpntInptTtl">Nature of Complaint</label>
                        <div class="mb-3">
                            <input type="text" class="form-control CmpntInptBx" id="Nature" placeholder="Nature of Complaint" value="Temperature too Hot" readonly/>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label class="CmpntInptTtl">Images</label>
                        <div class="mb-3">
                            <img src="<?= base_url('/public/wis_assets/Images/Complaint1.png'); ?>" class="CmpltImg"/>
                            <img src="<?= base_url('/public/wis_assets/Images/Complaint2.png'); ?>" class="CmpltImg"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="CmpntInptTtl">Complaint Priority</label>
                        <div class="mb-3 CmpntPrt" style="padding: 20px;">
                            <span class="SlctdPrt">High</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label class="CmpntInptTtl">Complaint Raised By (Optional)</label>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control CmpntInptBx" id="Name" placeholder="Name" value="Rajkumar Malik" readonly/>
                            <label for="Name" class="CmpntInptLbl">Name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control CmpntInptBx" id="PhoneNo" placeholder="Phone Number (+91)" value="9192939495" readonly/>
                            <label for="PhoneNo" class="CmpntInptLbl">Phone Number (+91)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <select class="form-control CmpntInptBx" id="Select Designation" disabled>
                                <option>Select Designation</option>
                                <option selected>Patient</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label class="CmpntInptTtl">Complaint Remarks</label>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <textarea class="form-control CmpntInptBx" placeholder="Add description" id="Description" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>