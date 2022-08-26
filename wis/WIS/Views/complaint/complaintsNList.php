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
<body>
<?php echo view('Modules\WIS\Views\common/leftmenu')  ?>
<?php echo view('Modules\WIS\Views\common/footer')  ?>
<?php echo view('Modules\WIS\Views\common/header')  ?>
<?php echo view('Modules\WIS\Views\common/header_sub')  ?>

    <div class="AppFllContainer FllScrn">
        <div class="ContainerLeft">
            <span class="SctnTtl CmplntsFdbck">Complaints</span>
            <div class="SctnInnerLnks">
                <ul class="InnrLnksHldr">
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintList" class="LnkTxt Actv">Complaints Admin</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>/complaintAttendence" class="LnkTxt">Man Power</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/complaintDashboard" class="LnkTxt">Complaints Dashboard</a>
                    </li> -->
                </ul>
            </div>
            <!-- <div class="SctnInnerMenu" style="margin-top: 0;">
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <span class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-headingFour">
                                Complaint Reports
                            </button>
                        </span>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="SbLnk">
                                   
                                    <li>
                                        <a href="<?php echo base_url(); ?>HospitalAdmin/complaintCReports" class="SbLnk">Complaints Report Overview</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="ContainerRight">
            <div class="SctnDtlsTtlHldr">
                <div class="BrcmnbHldr">
                    <ul class="DtlsBrdCrmb">
                        <li>
                            <span class="PgTtl">Complaints Admin</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="AppWdgtHldr InnrHldr Cmplnts">
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr TtCmplnts" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->UnAssigned+@$complaints->ComplaintsData[0]->InProcess+@$complaints->ComplaintsData[0]->Completed; ?></span>
                            <span class="WdgtNme">Total Complaints</span>
                        </div>
                    </div>
                </div>
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr UnAssgnd" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->UnAssigned; ?></span>
                            <span class="WdgtNme">Un-Assigned</span>
                        </div>
                    </div>
                </div>
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr InPrcss" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->InProcess; ?></span>
                            <span class="WdgtNme">In Process</span>
                        </div>
                    </div>
                </div>
                <div class="WdgtDv">
                    <div class="WdgtDtls">
                        <div class="WdgtIcnDv">
                            <img src="<?= base_url() ; ?>/public/wis_assets/Images/Blank.png" class="WdgtIcnHldr Cmpltd" />
                        </div>
                        <div class="WdgtTxtDtlsDv">
                            <span class="WdgtVlu"><?= @$complaints->ComplaintsData[0]->Completed; ?></span>
                            <span class="WdgtNme">Completed</span>
                        </div>
                    </div>
                </div>
                <div class="AddCmplt">
                    <a href="<?= base_url('complaints/add_complaint') ?>" class="AddNewRcrd">Add Complaint</a>
                </div>
            </div>
            <?php if(session('SusMsg') != '')
                echo '<div class="alert alert-success alert-dismissible w-75 m-auto" role="alert" class="">
                    '.session('SusMsg').'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            ?>
            <div class="InnrPgBgHldr">
                <div>

                </div>
                <div class="TableHldr">
                    <table class="AppDataTbl">
                        <tr class="Hdr">
                            <th style="width: 5%">
                                <span class="DataTtl">S. No.</span>
                            </th>
                            <th style="width: 5%">
                                <span class="DataTtl">C. No.</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint Category</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint Type</span>
                            </th>
                            <th>
                                <span class="DataTtl">Building</span>
                            </th>
                            <th width="9%">
                                <span class="DataTtl">Priority</span>
                            </th>
                            <th>
                                <span class="DataTtl">Complaint Time</span>
                            </th>
                            <th>
                                <span class="DataTtl">Repair - Material</span>
                            </th>
                            <th>
                                <span class="DataTtl">Status</span>
                            </th>
                            <th>
                                <span class="DataTtl">Completed By</span>
                            </th>
                        </tr>
                        <?php if(!empty($complaints->List)){
                            $i = 1;
                            foreach($complaints->List as $complaint){
                                echo '<tr ';
                                if($complaint->ComplaintStatus == '1') 
                                    echo 'class="Rd"';
                                echo '>
                                    <td>
                                        <span class="DataTxt">'.$i.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->ComID.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->CategoryName.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->ComplaintNature.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->BuildingName.'</span>
                                    </td>
                                    <td width="9%">
                                        <span class="DataTxt">'.$complaint->Priority.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->CreatedDate.'</span>
                                    </td>
                                    <td>
                                        <span class="DataTxt">'.$complaint->Material.'</span>
                                    </td>
                                    <td>';
                                        if($complaint->ComplaintStatus == '2')
                                            echo '<span id="LnkBtn1" onclick="window.location.href='."'".base_url('/complaints/update_complaint/'.$complaint->ComID.'/2')."'".'" class="BtnLnk Prcss">In Process</span>';
                                        else if($complaint->ComplaintStatus == '3')
                                            echo '<span id="LnkBtn1" onclick="javascript:ComplatedComplaint('.$complaint->ComID.');" class="BtnLnk Cmpltd">Completed (1hr 35 mins)</span>';
                                        else
                                            echo '<span class="DataTxt">'.$complaint->StausName.'</span>';
                                    echo '</td>
                                    <td>';
                                        if($complaint->ComplaintStatus == '1') 
                                            echo '<span id="LnkBtn1" onclick="window.location.href='."'".base_url('/complaints/update_complaint/'.$complaint->ComID.'/1')."'".'" class="BtnLnk">Assign Complaint</span>';  
                                        else
                                            echo '<span class="DataTxt">'.$complaint->AssignedBy.'</span>';
                                    echo '</td>
                                </tr>';
                                $i++;
                            } 
                        }else{
                            echo '<tr><td colspan="12" class="text-center">No data found.</td></tr>';
                        } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="AppMdlHldr" class="AppModalHldr Hide">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script>
        function tConvert (time) {
            // Check correct time format and split into components
            time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

            if (time.length > 1) { // If time format correct
                time = time.slice (1);  // Remove full string match value
                time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
                time[0] = +time[0] % 12 || 12; // Adjust hours
            }
            return time.join (''); // return adjusted time or original string
        }
        function ComplatedComplaint(ComID){
            if (document.getElementById('AppMdlHldr').getAttribute('class') == 'AppModalHldr Hide') {
                $.post("<?= base_url('/complaints/getcomplaint') ?>", {ComID: ComID}, function(data, status){
                    var complaint = '<div class="AppModalInnrHldr Smllr"><div class="ModalTtlHldr"><div class="ModalTtlHldr"><span class="SctnTtl">Completed Complaint</span><span class="FtrTtl">'+data.complaint.CategoryName+'</span><span id="AppMdlClsBtn" onclick="javascript:ComplatedComplaint('+ComID+');" class="ModalClsBtn"></span></div><div class="ModalFnctnHldr"><div class="container-fluid"><div class="row"><div class="col-md-2"><span class="InnrTtl">Date</span><span class="InnrTxt">';
                    var dateAr = data.complaint.UpdatedDate.split('-');
                    var newDate = dateAr[2].slice(0, -9) + '-' + dateAr[1] + '-' + dateAr[0];
                    complaint += newDate+'</span></div><div class="col-md-2"><span class="InnrTtl">Building</span><span class="InnrTxt">'+data.complaint.BuildingName+'</span></div><div class="col-md-2"><span class="InnrTtl">Floor</span><span class="InnrTxt">'+data.complaint.FloorName+'</span></div><div class="col-md-2"><span class="InnrTtl">Room</span><span class="InnrTxt">'+data.complaint.RoomName+'</span></div></div></div></div><div class="ModalCntntHldr"><div class="ModalFnctnHldr HeightAuto" style="background: #fff6ff; border-color: #e7bde7;"><div class="container-fluid"><div class="row"><div class="col-md-2"><span class="InnrTtl">Complaint By</span><span class="InnrTxt">';
                    if(data.complaint.empid == 0) 
                        complaint += 'Patient'; 
                    else 
                        complaint += 'Employee';
                    complaint += '</span></div><div class="col-md-2"><span class="InnrTtl">Complaint Time</span><span class="InnrTxt Bad">';
                    var dateAr = data.complaint.CreatedDate.split(':');
                    var AMPM = tConvert(dateAr[0].slice(11)+':'+dateAr[1]);
                    complaint += AMPM+' (+2 Hour)</span></div><div class="col-md-2"><span class="InnrTtl">Patient Name</span><span class="InnrTxt">'+data.complaint.Name+'</span></div><div class="col-md-2"><span class="InnrTtl">Contact No.</span><span class="InnrTxt">';
                    if(data.complaint.Mobile != '')
                        complaint += '+91 '+data.complaint.Mobile;
                    complaint += '</span></div></div></div></div><div class="ModalFnctnHldr HeightAuto" style="background: #ecffe6; border-color: #81e562;"><div class="container-fluid"><div class="row"><div class="col-md-4"><span class="InnrTtl">Assigned To</span><span class="InnrTxt">'+data.complaint.AssignedBy+'</span></div><div class="col-md-4"><span class="InnrTtl">Assigned Time</span><span class="InnrTxt">';
                    var dateAr = data.complaint.UpdatedDate.split(':');
                    var AMPM = tConvert(dateAr[0].slice(11)+':'+dateAr[1]);
                    complaint += AMPM+'</span></div></div></div></div><div class="ModalFnctnHldr HeightAuto" style="background: #ecffe6; border-color: #81e562;"><div class="container-fluid"><div class="row"><div class="col-md-4"><span class="InnrTtl">Note</span><span class="InnrTxt">'+data.complaint.AssignedNote+'</span></div><div class="col-md-4"><span class="InnrTtl">Status</span><span class="InnrTxt">'+data.complaint.StausName+'</span></div></div></div></div>';
                    if(data.images != null){
                        complaint += '<div class="CmpltImgBlk"><div class="container-fluid"><div class="col-md-12">';
                        $.each(data.images, function (i, field) {
                            complaint += '<img src="'+field.Image+'" class="CmpltImg"/>';
                        });
                        complaint += '</div></div></div>';
                    } if(data.complaint.ComplaintRemarks != ''){
                        complaint += '<div class="CmpltDescBlk"><div class="container-fluid"><div class="col-md-12"><p><span class="CmpltDesHed">Description : </span> '+data.complaint.ComplaintRemarks+'</p></div></div></div>';
                    }
                    complaint += '</div></div></div>';    
                    $("#AppMdlHldr").html(complaint);            
                    document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr');
                });
            } else {
                document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr Hide');
            }
        }
    </script>
</body>
</html>
