﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sanitation - Pest Control</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet.css?ver=1" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
</head>
<body>
<?php echo view('Modules\WIS\Views\common/leftmenu')  ?>
<?php echo view('Modules\WIS\Views\common/footer')  ?>
<?php echo view('Modules\WIS\Views\common/header')  ?>
<?php echo view('Modules\WIS\Views\common/header_sub')  ?>
    <div class="AppFllContainer">
        <div class="ContainerLeft">
            <span class="SctnTtl Snttn">Sanitation</span>
            <div class="SctnInnerLnks">
                <ul class="InnrLnksHldr">
                <li>
                        <a href="<?php echo base_url(); ?>/sanitation" class="LnkTxt Wshrm Icn">Washroom</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/sanitationWasteManagement" class="LnkTxt WstMngmnt Icn">Waste Management</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/sanitationPestControl" class="LnkTxt PstCntrl Icn Actv">Pest Control</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/sanitationFaceCleaning" class="LnkTxt FcdeClnng Icn">Facade Cleaning</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ContainerRight">
            <div class="SctnDtlsTtlHldr">
                <div class="BrcmnbHldr">
                    <ul class="DtlsBrdCrmb">
                        <li>
                            <a href="<?php echo base_url(); ?>/sanitation" class="BrdCrmLnk">All Sanitations</a>
                        </li>
                        <li>
                            <span class="PgTtl">Pest Control</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="InnrPgBgHldr">
                
            </div>
        </div>
    </div>
</body>
</html>
