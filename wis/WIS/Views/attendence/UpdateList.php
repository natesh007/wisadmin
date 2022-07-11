<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update List</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet.css?ver=1" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href=" <?= base_url() ?>/public/wis_assets/CSS/bootstrap-select.css">
    <script src="<?= base_url()?>/public/wis_assets/Scripts/bootstrap-select.min.js"></script>
    <style>
        .or{
            text-align: center;
    font-weight: bold;
    font-size: 17px;
    text-align: center;
    margin-top: 10px;
    
        }
        .nn{
            font: 600 12px/100% 'Open Sans';
            color: #333;
            margin-left: 15px;
        }
    </style>
</head>
<body>
<?php echo view('Modules\WIS\Views\common/leftmenu')  ?>
<?php echo view('Modules\WIS\Views\common/footer')  ?>
<?php echo view('Modules\WIS\Views\common/header')  ?>
<?php echo view('Modules\WIS\Views\common/header_sub')  ?>
<div class="AppFllContainer FllScrn">
    <div class="ContainerLeft">
            <span class="SctnTtl CmplntsFdbck">List View</span>
            <div class="SctnInnerLnks">
               
                <ul class="InnrLnksHldr">
                    <li>
                        <a href="<?php echo base_url(); ?>/listView" class="LnkTxt">Employee List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/updateList" class="LnkTxt Actv">Update List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/listViewDepartment" class="LnkTxt">Departments</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/listViewVacancy" class="LnkTxt">Vacancies</a>
                    </li>
                </ul>
            </div>
            
        </div>
        <div class="ContainerRight">
            <div class="SrchFltrDv ChckLst">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-2 BttnHldr">
                            <button type="button" onclick="javascript:ModalPopup();" class="btn btn-primary SbmtBtn">Add New Employee</button>
                        </div>
                        <div class="col-md-1 BttnHldr or">OR</div>
                        <div class="col-md-3 BttnHldr">
                       <a href="<?php echo base_url(); ?>asset/hospital_admin/Images/sample_department.xlsx" class="btn" download><i class="fa fa-download"></i>
                        Existing Employee List
                                </a>                           
                        </div>
                        
                        <div class="col-md-3 BttnHldr">
                            <input type="file"  class="btn btn-primary"></input>
                        </div>
                        <div class="col-md-2 BttnHldr">
                            <button type="button"  class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
             </div>          
           
           
        </div>
    </div>
    <div id="AppMdlHldr" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr" style="width:50%;height:85%;left:30%;top:8%">
            <div class="ModalTtlHldr">
                <div class="ModalTtlHldr">
                    <span class="SctnTtl"></span>
                    <span class="FtrTtl">Add Employee</span>
                    <span id="AppMdlClsBtn" onclick="javascript:ModalPopup();" class="ModalClsBtn"></span>
                </div>
                <div class="ModalCntntHldr AddEmpBlk" style="top:60px">
                    <div class="alert alert-success alert-dismissible" id="InfoDiv"></div>
                    <form method="post" id="AddEmployeeForm">
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="EmpName" class="FrmLbl">Employee Name</label>
                                <input type="text" class="form-control InptBx" id="EmpName" name="EmpName" placeholder="Enter Employee Name"/>
                            </div>
                            <div class="col-md-6">
                                <label for="OrgID" class="FrmLbl">Organization</label>
                                <select class="form-control InptBx" name="OrgID" id="OrgID">
                                    <option disabled selected value hidden>Select Organization</option>
                                    <?php foreach($organizations as $organization){
                                        echo '<option value="' . $organization->OrgID . '">' . $organization->OrgName . '</option>' ;
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="BrID" class="FrmLbl">Branch</label>
                                <select class="form-control InptBx selectpicker" name="BrID[]" id="BrID" multiple data-live-search="true">
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="DeptID" class="FrmLbl">Department</label>
                                <select class="form-control InptBx" name="DeptID" id="DeptID">
                                    <option disabled selected value hidden>Select Department</option>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="JobTID" class="FrmLbl">Job Title</label>
                                <select class="form-control InptBx" name="JobTID" id="JobTID">
                                    <option disabled selected value hidden>Select Job Title</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Email" class="FrmLbl">Email</label>
                                <input type="email" class="form-control InptBx" id="Email" name="Email" placeholder="Enter Email ID"/>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="Mobile" class="FrmLbl">Mobile Number</label>
                                <input type="text" class="form-control InptBx" id="Mobile" name="Mobile" placeholder="Enter Mobile Number"/>
                            </div>
                            <div class="col-md-6">
                                <label for="Gender" class="FrmLbl">Gender</label>
                                <select class="form-control InptBx" name="Gender" id="Gender">
                                    <option disabled selected value hidden>Select Gender</option>
                                    <option value="M">Male</option>
								    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="DateOfJoining" class="FrmLbl">Date Of Joining</label>
                                <input type="date" class="form-control InptBx" id="DateOfJoining" name="DateOfJoining" placeholder="Select Date Of Joining"/>
                            </div>
                            <div class="col-md-6">
                                <label for="JobType" class="FrmLbl">Job Type</label>
                                <input type="text" class="form-control InptBx" id="JobType" name="JobType" placeholder="Enter Job Type"/>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="Address" class="FrmLbl">Address</label>
                                <textarea class="form-control InptBx" rows="5" id="Address" name="Address" placeholder="Enter Address"></textarea>
                            </div>
                        </div>
                        <div class="text-center SavBtnBlk">
                            <button type="submit" class="btn btn-primary SavBtn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#OrgID').change(function(){
            if($(this).val() != ''){
                $.post("<?= base_url('/employees/getbranchesandjobtitlesbyorg') ?>", {OrgID: $(this).val()}, function(data, status){
                    var branches = '';
                    $.each(data.branches, function (i, field) {
                        branches += '<option value="'+field.BrID +'">'+field.BrName+'</option>';
                    });
                    $('#BrID').html(branches);
					$('#BrID').selectpicker("refresh");
                    var jobtitles = '<option disabled selected value hidden>Select Job Title</option>';
                    $.each(data.jobtitles, function (i, field) {
                        jobtitles += '<option value="'+field.JobTID +'">'+field.JobTitle+'</option>';
                    });
                    $('#JobTID').html(jobtitles);
                });
            }
        });
        $('#BrID, #OrgID').change(function(){
            if($("#BrID").val() != '' && $("#OrgID").val()){
                $.post("<?= base_url('/employees/getdepartmentsbyorgnbranch') ?>", {OrgID: $("#OrgID").val(), BrID: $("#BrID").val()}, function(data, status){
                    var depts = '<option disabled selected value hidden>Select Departments</option>';
                    $.each(data, function (i, field) {
                        depts += '<option value="'+field.DeptID +'">'+field.DeptName+'</option>';
                    });
                    $('#DeptID').html(depts);
                });
            }
        });
        $("form[id='AddEmployeeForm']").validate({
            ignore: [],
            rules: {
                EmpName: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                },
                OrgID: "required",
                "BrID[]": "required",
                DeptID: "required",
                JobTID: "required",
                Email: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                    email: true,
                },
                Mobile: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
            },
            messages: {
                EmpName: {
                    required: "Please enter Employee Name.",
                },
                OrgID: "Please select Organization",
                "BrID[]": "Please select Branches",
                DeptID: "Please select Department",
                JobTID: "Please select Job Title",
                Email: {
                    required: "Please enter Email.",
                    email: "Please enter valid Email.",
                    UniqueColumn: "This email is already existing. Please try with another.",
                },
                Mobile: "Please enter Mobile Number",
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "BrID[]") {
                    error.insertAfter(".bootstrap-select");
                    $(".bootstrap-select .dropdown-toggle")[0].style.setProperty( 'border-color', 'red', 'important' );
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                var data = new FormData($('#AddEmployeeForm')[0]);
                $.ajax({
                    url: "<?= base_url('/employees/add_employee'); ?>",
                    type: "POST",
                    data: data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    error: function(request, response) {
                        console.log(request);
                    },
                    success: function(result) {
                        var obj = jQuery.parseJSON(result);
                        if (obj.status == 'Success')
                            $("#InfoDiv").addClass('alert-success').removeClass('alert-danger');
                        else
                            $("#InfoDiv").addClass('alert-danger').removeClass('alert-success');
                        $("#InfoDiv").html(obj.msg);
                        $("#InfoDiv").show();
                        setTimeout(function() {
                            $("#InfoDiv").hide();
                        }, 3000);
                        if (obj.status == 'Success')
                            window.location.href = '<?= base_url('/updateList') ?>';
                    }
                });
            }
        });
    </script>
</body>
</html>
