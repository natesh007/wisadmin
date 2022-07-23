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
    <body style="background-color: #FFFFFF;">
        <div class="InnrPg">
            <div class="PgHdr">
                <span class="PgHdrTtl1">Waiting Hall -1</span>
                <h1 class="PgHdrTtl2">Floor 2, Block - A, ESIC Hospital</h1>
                <span class="icon-fullscreen"></span>
            </div>
            <div class="PgInnrHdr">
                <span class="PgInnrTtl">Please select from below to raise complaint<span>
            </div>
            <div class="PgInnrCntnt">
                <div class="CmpntInptBlk CmpntPrt" style="padding: 15px;">
                    <img src="<?= base_url('/public/wis_assets/Images/CmplntTyp1.png') ?>"/>
                    <span class="CmplntType ms-4">Heating/ Cooling</span>
                </div>
                <div class="row">
                    <label class="CmpntInptTtl">Common Complaint</label>
                    <div class="col-md-6">
                        <div class="CmpntInptBlk">
                            <select class="form-control CmpntInptBx" id="CommonComplaint">
                                <option>Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating CmpntInptBlk">
                            <input type="text" class="form-control CmpntInptBx" id="PhoneNo" placeholder="Add Custom Complaint"/>
                            <label for="PhoneNo" class="CmpntInptLbl">Add Custom Complaint</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label class="CmpntInptTtl">Add Images</label>
                        <div class="form-floating CmpntInptBlk">
                            <input type="text" class="form-control CmpntInptBx" id="PhoneNo" placeholder="Add Custom Complaint"/>
                            <label for="PhoneNo" class="CmpntInptLbl">Add Custom Complaint</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="CmpntInptTtl">Complaint Priority</label>
                        <div class="CmpntInptBlk CmpntPrt" style="padding: 20px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label CmplntType" for="flexRadioDefault2">
                                        High
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label CmplntType" for="flexRadioDefault2">
                                        Medium
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label CmplntType" for="flexRadioDefault2">
                                        Low
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label class="CmpntInptTtl">Complaint Raised By (Optional)</label>
                    <div class="col-md-4">
                        <div class="form-floating CmpntInptBlk">
                            <input type="text" class="form-control CmpntInptBx" id="Name" placeholder="Name"/>
                            <label for="Name" class="CmpntInptLbl">Name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating CmpntInptBlk">
                            <input type="text" class="form-control CmpntInptBx" id="PhoneNo" placeholder="Phone Number (+91)"/>
                            <label for="PhoneNo" class="CmpntInptLbl">Phone Number (+91)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="CmpntInptBlk">
                            <select class="form-control CmpntInptBx" id="Select Designation">
                                <option>Select Designation</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label class="CmpntInptTtl">Complaint Remarks</label>
                    <div class="col-md-12">
                        <div class="form-floating CmpntInptBlk">
                            <textarea class="form-control CmpntInptBx" placeholder="Add description" id="Description"></textarea>
                            <label for="Description" class="CmpntInptLbl">Add description</label>
                        </div>
                    </div>
                </div>
                <div class="CmplntBtnBlk" style="text-align: center">
                    <button type="button" class="btn">Submit</button>
                </div>
            </div>
        </div>
    </body>
</html>