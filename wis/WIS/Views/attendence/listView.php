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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href=" <?= base_url() ?>/public/wis_assets/CSS/bootstrap-select.css">
    <script src="<?= base_url()?>/public/wis_assets/Scripts/bootstrap-select.min.js"></script>
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
                        <a href="<?php echo base_url(); ?>/updateList" class="LnkTxt">Update List</a>
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
                        <div class="col-md-3" style="font: 600 15px/100% 'Open Sans';    color: #0078BA;    padding-top: 16px; font-weight: bold;width:18%">
                            Employee List
                        </div>
                        <!-- <div class="col-md-6 BttnHldr">
                            <button type="button" onclick="javascript:ModalPopup();" class="btn btn-primary SbmtBtn">Add New Employee</button>
                        </div> -->
                    </div>
                </div>
                <div class="SrchFltrDv ChckLst">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-2">
                                <select class="form-select InptBx" aria-label="Default select example">
                                    <option selected>Service Department</option>
                                    <option value="1">All</option>
                                    <option value="2">Electrical</option>
                                    <option value="3">Supervisor</option>
                                    <option value="4">HVAC</option>
                                    <option value="5">Janitor</option>
                                    <option value="6">Plumber</option>

                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-select InptBx" aria-label="Default select example">
                                    <option selected>Job Title</option>
                                    <option value="1">Senior Electrician</option>
                                    <option value="2">Junior Electrician</option>
                                    <option value="3">DG Operator</option>
                                    <option value="3">Senior Janitor</option>
                                    <option value="3">Senior Plumber</option>
                                    <option value="3">Junior Plumber</option>
                                </select>
                            </div>
                            <div class="col-md-2 BttnHldr">
                                <select class="form-select InptBx" aria-label="Default select example">
                                    <option selected>Joining To Date</option>
                                    <option value="1">6 Months</option>
                                    <option value="2">1 Year</option>
                                    <option value="3">2+ Year</option>

                                </select>
                                <!-- <input type="text" class="form-control InptBx Clndr" id="Text1" value="Joining To Date" /> -->
                            </div>
                            <div class="col-md-2 BttnHldr">
                                <button type="button" onclick="" class="btn btn-primary SbmtBtn">Submit</button>
                                <button type="button" class="btn btn-primary FnctnBtn Prnt">Print</button>
                                <button type="button" class="btn btn-primary FnctnBtn Dwnld">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($employees){
                    echo '<div class="InnrPgBgHldr">';
                    foreach($employees as $employee){
                        echo '<span class="SctnTtl CmplntsFdbck" style="font: 600 15px/100% '.'Open Sans'.';color: #101010d9;padding-top: 16px;font-weight: bold;width:18%">'.$employee->DeptName.'</span>
                        <div class="TableHldr">
                            <table class="AppDataTbl">
                                <tbody>
                                    <tr class="Hdr">
                                        <th>
                                            <span class="DataTtl">S. No.</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Emp. ID.</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Employee Name</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Service Department</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Job Title</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Joined On</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Experience</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Previous Experience</span>
                                        </th>
                                        <th>
                                            <span class="DataTtl">Total Experience</span>
                                        </th>
                                        <th>
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
                                                    <span class="DataTxt">'.$employee->DeptName.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->JobType.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->DateOfJoining.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">3</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">'.$emp->PreviousExp.'</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">8</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt">8</span>
                                                </td>
                                                <td>
                                                    <span class="DataTxt" onclick="javascript:UpdateEmployee('.$emp->EmpID.');">Edit</span>&nbsp;';
                                                    if($emp->Status == 1)
                                                        echo '<span class="DataTxt">Inactivate</span>';
                                                    else
                                                    echo '<span class="DataTxt">Activate</span>';
                                                echo '</td>
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
                    <span class="SctnTtl"></span>
                    <span class="FtrTtl">Add Employee</span>
                    <span id="AppMdlClsBtn" onclick="javascript:UpdateEmployee('');" class="ModalClsBtn"></span>
                </div>
                <div class="ModalCntntHldr AddEmpBlk" style="top:60px">
                    <div class="alert alert-success alert-dismissible" id="InfoDiv"></div>
                    <form method="post" id="UpdateEmployeeForm">
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="EmpID" name="EmpID"/>
                                <label for="EmpName" class="FrmLbl">Employee Name</label>
                                <input type="text" class="form-control InptBx" id="EmpName" name="EmpName" placeholder="Enter Employee Name"/>
                            </div>
                            <div class="col-md-6">
                                <label for="OrgID" class="FrmLbl">Organization</label>
                                <select class="form-control InptBx" name="OrgID" id="OrgID">
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
                                <label for="PreviousExp" class="FrmLbl">Previous Experience</label>
                                <select class="form-control InptBx" name="PreviousExp" id="PreviousExp">
                                    <option disabled selected value hidden>Select Previous Experience</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Address" class="FrmLbl">Address</label>
                                <textarea class="form-control InptBx" rows="5" id="Address" name="Address" placeholder="Enter Address"></textarea>
                            </div>
                        </div>
                        <div class="text-center SavBtnBlk">
                            <button type="submit" class="btn btn-primary SavBtn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function UpdateEmployee(EmpID){
            if (document.getElementById('AppMdlHldr').getAttribute('class') == 'AppModalHldr Hide') {
                if(EmpID != ''){
                    $.post("<?= base_url('/employees/get_employee') ?>", {EmpID: EmpID}, function(data, status){
                        $("#EmpID").val(data.employee.EmpID);
                        $("#EmpName").val(data.employee.EmpName);
                        var orgs = '<option disabled selected value hidden>Select Organization</option>';
                        $.each(data.organizations, function (i, field) {
                            orgs += '<option value="'+field.OrgID+'"';
                            if(field.OrgID == data.employee.OrgID)
                                orgs += 'selected';
                            orgs += '>'+field.OrgName+'</option>';
                        });
                        $("#OrgID").html(orgs);
                        var brs ='';
                        $.each(data.branches, function (i, field) {
                            brs += '<option value="'+field.BrID+'"';
                            var sel_brs = data.employee.BrID.split(',');;
                            console.log(sel_brs);
                            if(jQuery.inArray(field.BrID, sel_brs) != -1)
                                brs += 'selected';
                            brs += '>'+field.BrName+'</option>';
                        });
                        $("#BrID").html(brs);
                        var depts = '<option disabled selected value hidden>Select Department</option>';
                        $.each(data.departments, function (i, field) {
                            depts += '<option value="'+field.DeptID+'"';
                            if(field.DeptID == data.employee.DeptID)
                                depts += 'selected';
                            depts += '>'+field.DeptName+'</option>';
                            $.each(field.Subdeparts, function (j, field2) {
                                depts += '<option value="'+field2.DeptID +'"';
                                if(field2.DeptID == data.employee.DeptID)
                                    depts += 'selected';
                                depts += '>'+field2.DeptName+'</option>';
                            });
                        });
                        $("#DeptID").html(depts);
                        var ttls = '<option disabled selected value hidden>Select Job Title</option>';
                        $.each(data.jobtitles, function (i, field) {
                            ttls += '<option value="'+field.JobTID+'"';
                            if(field.JobTID == data.employee.JobTID)
                                ttls += 'selected';
                            ttls += '>'+field.JobTitle+'</option>';
                        });
                        $("#JobTID").html(ttls);
                        $("#Email").val(data.employee.EmailID);
                        $("#Mobile").val(data.employee.Mobile);
                        var gen = '<option disabled selected value hidden>Select Gender</option><option value="M"';
                        if(data.employee.Gender == 'M')
                            gen += 'selected';
                        gen += '>Male</option><option value="F"';
                        if(data.employee.Gender == 'F')
                            gen += 'selected';
                        gen += '>Female</option>';
                        $("#Gender").html(gen);
                        $("#DateOfJoining").val(data.employee.DateOfJoining);
                        $("#JobType").val(data.employee.JobType);
                        var prev_exp = '<option disabled selected value hidden>Select Previous Experience</option>';
                        $.each(data.prev_exp, function (i, field) {
                            prev_exp += '<option value="'+i+'"';
                            if(i == data.employee.PreviousExp)
                                prev_exp += 'selected';
                            prev_exp += '>'+field+'</option>';
                        });
                        $("#PreviousExp").html(prev_exp);
                        $("#Address").val(data.employee.Address);                        
                        $('#BrID').selectpicker("refresh");
                    });
                    document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr');
                }
            } else {
                $('#UpdateEmployeeForm input, #UpdateEmployeeForm select, #UpdateEmployeeForm textarea').val('');
                document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr Hide');
            }
        }
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
                        $.each(field.Subdeparts, function (j, field2) {
                            depts += '<option value="'+field2.DeptID +'">'+field2.DeptName+'</option>';
                        });
                    });
                    $('#DeptID').html(depts);
                });
            }
        });
        $("form[id='UpdateEmployeeForm']").validate({
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
                var data = new FormData($('#UpdateEmployeeForm')[0]);
                $.ajax({
                    url: "<?= base_url('/employees/update_employee'); ?>",
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
                            window.location.href = '<?= base_url('/listView') ?>';
                    }
                });
            }
        });
    </script>
</body>

</html>