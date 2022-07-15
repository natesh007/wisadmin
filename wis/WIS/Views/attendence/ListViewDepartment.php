<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checklist Details</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet.css?ver=1" rel="stylesheet" />
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
                        <a href="<?php echo base_url(); ?>/updateList" class="LnkTxt">Update List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/listViewDepartment" class="LnkTxt Actv">Departments</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/listViewVacancy" class="LnkTxt">Vacancies</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ContainerRight">
            <div class="SrchFltrDv ChckLst">
                <div class="alert alert-success alert-dismissible" id="ErrDiv"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6" style="font: 600 15px/100% 'Open Sans';    color: #0078BA;    padding-top: 16px;
                            font-weight: bold;">
                            Departments
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <button type="button" onclick="javascript:AddOrUpdateDepartment('');" class="btn btn-primary SbmtBtn" style="width:34%">Add Department</button>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="SrchFltrDv ChckLst">
                <div class="container-fluid">
                    <form action="" method="post"> 
                        <div class="row">
                            <div class="col-md-2">
                                <input type="search" class="form-control InptBx" placeholder="Search By Department" name="DepartmentName" value="<?= $DepartmentName; ?>"/>
                            </div>
                            <div class="col-md-2">
                                <select class="form-select InptBx" name="Branch">
                                    <option disabled selected value hidden>Select Branch</option>
                                    <option value="">All</option>
                                    <?php if(!empty($branches)){
                                        foreach($branches as $branch){
                                            echo '<option value="'.$branch->BrID.'"';
                                            if($Branch == $branch->BrID) echo 'selected';
                                            echo '>'.$branch->BrName.'</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-select InptBx" aria-label="Default select example" name="SortType">
                                    <option disabled selected value hidden>Sort By</option>
                                    <option value="department" <?php if($SortType == 'department') echo 'selected'; ?>>Service Department</option>
                                    <option value="branch" <?php if($SortType == 'branch') echo 'selected'; ?>>Branch</option>
                                </select>
                            </div>
                            <div class="col-md-2 BttnHldr">
                                <button type="submit" class="btn btn-primary SbmtBtn">Submit</button>
                                <button type="button" class="btn btn-primary FnctnBtn Prnt">Print</button>
                                <button type="button" class="btn btn-primary FnctnBtn Dwnld">Download</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="InnrPgBgHldr">
                <div class="TableHldr">
                    <table class="AppDataTbl">
                        <tbody>
                            <tr class="Hdr">
                                <th>
                                    <span class="DataTtl">S. No.</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Service Department</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Parent Department</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Branch</span>
                                </th>
                                <th>
                                    <span class="DataTtl">Actions</span>
                                </th>
                            </tr>
                            <?php if(!empty($departments)){
                                foreach($departments as $key => $department){
                                    echo '<tr>
                                        <td>
                                            <span class="DataTxt">'.($key+1).'</span>
                                        </td>
                                        <td>
                                            <span class="DataTxt">'.$department->DeptName.'</span>
                                        </td>
                                        <td>
                                            <span class="DataTxt">'.$department->ParentName.'</span>
                                        </td>
                                        <td>
                                            <span class="DataTxt">'.$department->BrName.'</span>
                                        </td>
                                        <td>
                                            <span class="DataTxt" onclick="javascript:AddOrUpdateDepartment('.$department->DeptID.');">Edit</span>
                                            &nbsp;
                                            <span class="DataTxt" id="ActInAct" onclick="activeinactive('."'getdepartment', ".$department->DeptID.', ';
                                            if($department->Status == 1) echo '0'; else echo '1';
                                            echo ')">';
                                            if($department->Status == 1) echo 'Inactivate'; else echo 'Actvate';
                                            echo '</span>
                                        </td>
                                    </tr>';
                                } 
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div style="padding-top:25px"></div>
            </div>
        </div>
    </div>
    <div id="AppMdlHldr" class="AppModalHldr Hide">
        <div class="AppModalInnrHldr" style="width:50%;height:48%;left:30%;top:8%">
            <div class="ModalTtlHldr">
                <div class="ModalTtlHldr">
                    <span class="SctnTtl"><?= session('OrgName'); ?></span>
                    <span class="FtrTtl">Add Department</span>
                    <span id="AppMdlClsBtn" onclick="javascript:AddOrUpdateDepartment('');" class="ModalClsBtn"></span>
                </div>
                <div class="ModalCntntHldr AddEmpBlk" style="top:60px">
                    <div class="alert alert-success alert-dismissible" id="InfoDiv"></div>
                    <form method="post" id="AddOrUpdateDepartmentForm">
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="DeptID" name="DeptID"/>
                                <label for="DeptName" class="FrmLbl">Department Name</label>
                                <input type="text" class="form-control InptBx" id="DeptName" name="DeptName" placeholder="Enter Department Name"/>
                            </div>
                            <div class="col-md-6">
                                <label for="ParentDeptID" class="FrmLbl">Parent Department</label>
                                <select class="form-control InptBx" name="ParentDeptID" id="ParentDeptID">
                                    <option disabled selected value hidden>Select Parent Department</option>
                                    <?php foreach($departments as $department){
                                        echo '<option value="' . $department->DeptID . '">' . $department->DeptName . '</option>' ;
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formgrp row">
                            <div class="col-md-6">
                                <label for="BrID" class="FrmLbl">Branch</label>
                                <select class="form-control InptBx" name="BrID" id="BrID">
                                    <option disabled selected value hidden>Select Branch</option>
                                    <?php foreach($branches as $branch){
                                        echo '<option value="' . $branch->BrID . '">' . $branch->BrName . '</option>' ;
                                    } ?>
                                </select>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        function AddOrUpdateDepartment(DeptID){
            $("#DeptID").remove();
            if (document.getElementById('AppMdlHldr').getAttribute('class') == 'AppModalHldr Hide') {
                $("#AppMdlHldr span.FtrTtl").html('Add Department');
                $("#AppMdlHldr button.SavBtn").html('Submit');
                if(DeptID != ''){
                    $("#AppMdlHldr span.FtrTtl").html('Update Department');
                    $("#AppMdlHldr button.SavBtn").html('Update');
                    $.post("<?= base_url('/departments/get_department') ?>", {DeptID: DeptID}, function(data, status){
                        $('<input type="hidden" class="form-control" id="DeptID" name="DeptID" value="'+data.DeptID+'"/>').insertAfter("#DeptName");
                        $("#DeptName").val(data.DeptName);
                        $('#ParentDeptID option[value="'+data.ParentDept+'"]').prop('selected', true);
                        $('#BrID option[value="'+data.BrID+'"]').prop('selected', true);
                    });
                }
                document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr');
            } else {
                $('#AddOrUpdateDepartmentForm input, #AddOrUpdateDepartmentForm select, #AddOrUpdateDepartmentForm textarea').val('');
                document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr Hide');
            }
        }
        $("form[id='AddOrUpdateDepartmentForm']").validate({
            ignore: [],
            rules: {
                DeptName: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                },
                BrID: "required",
            },
            messages: {
                DeptName: {
                    required: "Please enter Department Name.",
                },
                BrID: "Please select Branch",
            },
            submitHandler: function(form) {
                var data = new FormData($('#AddOrUpdateDepartmentForm')[0]);
                $.ajax({
                    url: '<?= base_url('/departments/add_or_update_department'); ?>',
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
    </script>
</body>
</html>
