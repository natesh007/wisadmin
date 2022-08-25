<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List View</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet.css?ver=1" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/wis_assets/CSS/bootstrap-select.css">
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
                        <a href="<?php echo base_url(); ?>/listView" class="LnkTxt Actv">Employee List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/listViewDepartment" class="LnkTxt">Departments</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>/listViewVacancy" class="LnkTxt">Vacancies</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="ContainerRight">
            <div class="SrchFltrDv ChckLst">
                <div class="alert alert-success alert-dismissible" id="ErrDiv"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6" style="font: 600 15px/100% 'Open Sans'; color: #0078BA; padding-top: 16px; font-weight: bold;">
                            Employee List
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="file" class="form-control InptBx" name=""/>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" onclick="" class="btn btn-primary SbmtBtn">Upload</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="text-align: right">
                            <button type="button" onclick="javascript:AddOrUpdateEmployee('');" class="btn btn-primary SbmtBtn">Add Employee</button>
                        </div>
                    </div>
                </div>
                <div class="SrchFltrDv ChckLst">
                    <div class="container-fluid">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-select InptBx" aria-label="Department" name="Department">
                                        <option disabled selected value hidden>Service Department</option>
                                        <option value="">All</option>
                                        <?php if(!empty($departments)){
                                            foreach($departments as $department){
                                                if($department->ParentDept == 0){
                                                echo '<option value="'.$department->DeptID.'"';
                                                if($Department == $department->DeptID) echo 'selected';
                                                echo '>'.$department->DeptName.'</option>';
                                                }
                                            }
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select InptBx" aria-label="JobTitle" name="JobTitle">
                                        <option disabled selected value hidden>Job Title</option>
                                        <option value="">All</option>
                                        <?php if(!empty($jobtitles)){
                                            foreach($jobtitles as $jobtitle){
                                                echo '<option value="'.$jobtitle->JobTID.'"';
                                                if($JobTitle == $jobtitle->JobTID) echo 'selected';
                                                echo '>'.$jobtitle->JobTitle.'</option>';
                                            }
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-md-2 BttnHldr">
                                    <select class="form-select InptBx" aria-label="JoiningDate" name="JoiningDate">
                                        <option disabled selected value hidden>Joining To Date</option>
                                        <option value="3">All</option>
                                        <option value="1" <?= ($JoiningDate == '1') ? 'selected' : ''; ?>>6 Months</option>
                                        <option value="2" <?= ($JoiningDate == '2') ? 'selected' : ''; ?>>1 Year</option>
                                    </select>
                                </div>
                                <div class="col-md-2 BttnHldr">
                                    <select class="form-select InptBx" aria-label="Status" name="Status">
                                        <option disabled selected value hidden>Status</option>
                                        <option value="">All</option>
                                        <option value="1" <?= ($Status == '1') ? 'selected' : ''; ?>>Active</option>
                                        <option value="0" <?= ($Status == '0') ? 'selected' : ''; ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-4 BttnHldr">
                                    <button type="submit" class="btn btn-primary SbmtBtn">Submit</button>
                                    <button type="button" class="btn btn-primary FnctnBtn Prnt">Print</button>
                                    <button type="submit" class="btn btn-primary FnctnBtn Dwnld" name="Download">Download</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php if($employees){
                    echo '<div class="InnrPgBgHldr" id="EmpTbl">';
                    foreach($employees as $employee){
                        echo '<span class="SctnTtl CmplntsFdbck" style="font: 600 15px/100% '.'Open Sans'.';color: #101010d9;padding-top: 16px;font-weight: bold;width:18%">'.$employee->DeptName.'</span>
                        <div class="TableHldr">
                            <table class="AppDataTbl">
                                <tbody>
                                    <tr class="Hdr">
                                        <th style="width: 5%">
                                            <span class="DataTtl">S. No.</span>
                                        </th>
                                        <th style="width: 7%">
                                            <span class="DataTtl">Emp. ID.</span>
                                        </th>
                                        <th style="width: 15%">
                                            <span class="DataTtl">Employee Name</span>
                                        </th>
                                        <th style="width: 15%">
                                            <span class="DataTtl">Service Department</span>
                                        </th>
                                        <th style="width: 10%">
                                            <span class="DataTtl">Job Type</span>
                                        </th>
                                        <th style="width: 10%">
                                            <span class="DataTtl">Job Title</span>
                                        </th>
                                        <th style="width: 10%">
                                            <span class="DataTtl">Joined On</span>
                                        </th>
                                        <th style="width: 9%">
                                            <span class="DataTtl">Experience</span>
                                        </th>
                                        <th style="width: 9%">
                                            <span class="DataTtl">Previous Experience</span>
                                        </th>
                                        <th style="width: 10%">
                                            <span class="DataTtl">Actions</span>
                                        </th>
                                    </tr>';
                                    if(@$employee->Employees){
                                        foreach($employee->Employees as $key => $emp){
                                            echo '<tr>
                                                <td>
                                                    <span class="DataTxt">'.($key+1).'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">EMP-'.$emp->EmpID.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->EmpName.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->DeptName.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->JobType.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->JobTitle.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->DateOfJoining.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->PreviousExperience.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->PreviousExperience.'</span>
                                                </td>
                                              
                                                <td>
                                                    <span class="DataTxt" onclick="javascript:AddOrUpdateEmployee('.$emp->EmpID.');">Edit</span>
                                                    &nbsp;
                                                    <span class="DataTxt" id="ActInAct" onclick="activeinactive('."'getemployee', ".$emp->EmpID.', ';
                                                    if($emp->Status == 1) echo '0'; else echo '1';
                                                    echo ')">';
                                                    if($emp->Status == 1) echo 'Inactivate'; else echo 'Actvate';
                                                    echo '</span>
                                                </td>
                                            </tr>';
                                        }
                                    }else{
                                        echo '<tr>
                                                <td colspan="9" class="text-center">
                                                    <span class="DataTxt">No data found.</span>
                                                </td>
                                            </tr>';
                                    }
                                echo '</tbody>
                            </table>
                        </div>
                        <div style="padding-top:25px"></div>';
                    }
                    echo '</div>';
                } ?>
            </div>
        </div>
    </div>
    <div id="AppMdlHldr" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr" style="width:50%;height:85%;left:30%;top:8%">
            <div class="ModalTtlHldr">
                <div class="ModalTtlHldr">
                    <span class="SctnTtl"><?= session('OrgName'); ?></span>
                    <span class="FtrTtl">Add Employee</span>
                    <span id="AppMdlClsBtn" onclick="javascript:AddOrUpdateEmployee('');" class="ModalClsBtn"></span>
                </div>
                <div class="ModalCntntHldr AddEmpBlk" style="top:60px">
                    <div class="alert alert-success alert-dismissible" id="InfoDiv"></div>
                    <form method="post" id="AddOrUpdateEmployeeForm" enctype="multipart/form-data">
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="EmpName" class="FrmLbl">Employee Name</label>
                                <input type="text" class="form-control InptBx" id="EmpName" name="EmpName" placeholder="Enter Employee Name"/>
                            </div>
                            <div class="col-md-6">
                                <label for="BrID" class="FrmLbl">Branch</label>
                                <select class="form-control InptBx selectpicker" name="BrID[]" id="BrID" multiple data-live-search="true">
                                <?php if(!empty($branches)){
                                    foreach($branches as $branch){
                                        echo '<option value="'.$branch->BrID .'">'.$branch->BrName.'</option>';
                                    }
                                } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="DeptID" class="FrmLbl">Department</label>
                                <select class="form-select InptBx" name="DeptID" id="DeptID">
                                    <option disabled selected value hidden>Select Departments</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="JobTID" class="FrmLbl">Job Title</label>
                                <select class="form-select InptBx" name="JobTID" id="JobTID">
                                    <option disabled selected value hidden>Select Job Title</option>
                                    <?php if(!empty($jobtitles)){
                                        foreach($jobtitles as $jobtitle){
                                            echo '<option value="'.$jobtitle->JobTID .'">'.$jobtitle->JobTitle.'</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="Email" class="FrmLbl">Email</label>
                                <input type="email" class="form-control InptBx" id="Email" name="Email" placeholder="Enter Email ID"/>
                            </div>
                            <div class="col-md-6">
                                <label for="Mobile" class="FrmLbl">Mobile Number</label>
                                <input type="text" class="form-control InptBx" id="Mobile" name="Mobile" placeholder="Enter Mobile Number"/>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="Mobile" class="FrmLbl">Whatsapp Number (Same As Mobile Number <input type="checkbox" id="SameAsMbl" class="form-check-input" checked/> )</label>
                                <input type="text" class="form-control InptBx" id="Whatsapp" name="Whatsapp" placeholder="Enter Whatsapp Number"/>
                            </div>
                            <div class="col-md-6">
                                <label for="Gender" class="FrmLbl">Gender</label>
                                <select class="form-select InptBx" name="Gender" id="Gender">
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
                                <label for="PreviousExp" class="FrmLbl">Previous Experience</label>
                                <select class="form-select InptBx" name="PreviousExp" id="PreviousExp">
                                    <option disabled selected value hidden>Select Previous Experience</option>
                                    <?php if(!empty($prev_exp)){
                                        foreach($prev_exp as $key => $exp){
                                            echo '<option value="'.$key.'">'.$exp.'</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Shift" class="FrmLbl">Shift</label>
                                <select class="form-select InptBx" name="Shift" id="Shift">
                                    <option disabled selected value hidden>Select Shift</option>
                                    <?php if(!empty($shifts)){
                                        foreach($shifts as $key => $shift){
                                            echo '<option value="'.$shift->ShID.'">'.$shift->ShiftDesc.'</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="Address" class="FrmLbl">Address</label>
                                <textarea class="form-control InptBx" rows="5" id="Address" name="Address" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="ProfilePic" class="FrmLbl">Profile Pic</label>
                                <input type="file" class="form-control InptBx" name="ProfilePic" id="ProfilePic" style="padding: 10px"/>
                                <img src="" id="Profile"/>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="<?= base_url()?>/public/wis_assets/Scripts/bootstrap-select.min.js"></script>
    <script>
        $("#Mobile").keyup(function(){
            $("#Whatsapp").val($(this).val());
        });
        $( "#SameAsMbl" ).change(function() {
            if ($(this).prop('checked')==false){ 
                $("#Whatsapp").val('');
            }if ($(this).prop('checked')==true){ 
                $("#Whatsapp").val($("#Mobile").val());
            }
        });
        function AddOrUpdateEmployee(EmpID){
            $("#EmpID").remove();
            if (document.getElementById('AppMdlHldr').getAttribute('class') == 'AppModalHldr Hide') {
                $("#AppMdlHldr span.FtrTtl").html('Add Employee');
                $("#AppMdlHldr button.SavBtn").html('Submit');
                if(EmpID != ''){
                    $("#AppMdlHldr span.FtrTtl").html('Update Employee');
                    $("#AppMdlHldr button.SavBtn").html('Update');
                    $.post("<?= base_url('/employees/get_employee') ?>", {EmpID: EmpID}, function(data, status){
                        $('<input type="hidden" class="form-control" id="EmpID" name="EmpID" value="'+data.employee.EmpID+'"/>').insertAfter("#EmpName");
                        $("#EmpName").val(data.employee.EmpName);
                        if(data.employee.BrID){
                            var sel_brs = data.employee.BrID.split(',');
                            $.each(sel_brs, function (i, field) {
                                $('#BrID option[value="'+field+'"]').prop('selected', true);
                            });
                        }
                        $('#BrID').selectpicker('refresh');
                        var depts = '<option disabled selected value hidden>Select Departments</option>';
                        $.each(data.departments, function (i, field) {
                            if(field.Subdeparts.length !== 0){
                                depts += '<optgroup label="'+field.DeptName+'">';
                            }else{
                                depts += '<option value="'+field.DeptID+'"';
                                if(field.DeptID == data.employee.DeptID)
                                    depts += 'selected';
                                depts += ' style="font-weight:700; font-family: inherit; font-size: inherit;"ss>'+field.DeptName+'</option>';
                            }
                            $.each(field.Subdeparts, function (j, field2) {
                                depts += '<option value="'+field2.DeptID +'"';
                                if(field2.DeptID == data.employee.DeptID)
                                    depts += 'selected';
                                depts += '>'+field2.DeptName+'</option>';
                            });
                            if(field.Subdeparts.length !== 0){
                                depts += '</optgroup>';
                            }
                        });
                        $("#DeptID").html(depts);
                        $('#JobTID option[value="'+data.employee.JobTID+'"]').prop('selected', true);
                        $("#Email").val(data.employee.EmailID);
                        $("#Mobile").val(data.employee.Mobile);
                        $('#Gender option[value="'+data.employee.Gender+'"]').prop('selected', true);
                        $("#DateOfJoining").val(data.employee.DateOfJoining);
                        $("#JobType").val(data.employee.JobType);
                        $('#PreviousExp option[value="'+data.employee.PreviousExp+'"]').prop('selected', true);
                        $('#Shift option[value="'+data.employee.Shift+'"]').prop('selected', true);
                        $("#Address").val(data.employee.Address);   
                        if(data.employee.ProfilePic != ''){
                            $("#Profile").show();
                            $("#Profile").attr('src', data.employee.ProfilePic);
                        }
                        document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr');
                    });
                }else{
                    $("#Profile").hide();
                    document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr');
                }
            } else {
                $('#AddOrUpdateEmployeeForm input, #AddOrUpdateEmployeeForm select, #AddOrUpdateEmployeeForm textarea').val('');
                $('#BrID').selectpicker('refresh');
                document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr Hide');
            }
        }
        $('#BrID').change(function(){
            if($("#BrID").val() != ''){
                $.post("<?= base_url('/employees/getdepartmentsbyorgnbranch') ?>", {BrID: $("#BrID").val()}, function(data, status){
                    var depts = '<option disabled selected value hidden>Select Departments</option>';
                    console.log(data);
                    $.each(data, function (i, field) {
                        
                        if(field.Subdeparts.length !== 0){
                            depts += '<optgroup label="'+field.DeptName+'">';
                        }else{
                            depts += '<option value="'+field.DeptID +'" style="font-weight:700; font-family: inherit; font-size: inherit;">'+field.DeptName+'</option>';
                        }
                        $.each(field.Subdeparts, function (j, field2) {
                            depts += '<option value="'+field2.DeptID +'">'+field2.DeptName+'</option>';
                        });
                        if(field.Subdeparts.length !== 0){
                            depts += '</optgroup>';
                        }
                    });
                    $('#DeptID').html(depts);
                });
            }
        });
        $("form[id='AddOrUpdateEmployeeForm']").validate({
            ignore: [],
            rules: {
                EmpName: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                },
                "BrID[]": "required",
                DeptID: "required",
                JobTID: "required",
                Shift: "required",
                Gender: "required", 
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
                    },
                    minlength: 10,
                    maxlength: 10,
                },
            },
            messages: {
                EmpName: {
                    required: "Please enter Employee Name.",
                },
                "BrID[]": "Please select Branches",
                DeptID: "Please select Department",
                JobTID: "Please select Job Title",
                Shift: "Please select Job Title",
                Gender: "Please select Gender",
                Email: {
                    required: "Please enter Email",
                    email: "Please enter valid Email",
                },
                Mobile: {
                    required: "Please enter Mobile Number",
                    minlength: "Please enter minimum 10 characters",
                    maxlength: "Please enter less than 10 characters",
                },
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
                var data = new FormData($('#AddOrUpdateEmployeeForm')[0]);
                $.ajax({
                    url: '<?= base_url('/employees/add_or_update_employee'); ?>',
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
                            window.location.href = window.location.href;
                    }
                });
            }
        });
        ProfilePic.onchange = evt => {
            const [file] = ProfilePic.files
            if (file) {
                $("#Profile").show();
                Profile.src = URL.createObjectURL(file)
            }
        }
    </script>
</body>

</html>