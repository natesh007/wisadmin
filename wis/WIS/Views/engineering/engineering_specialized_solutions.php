<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Engineering - Specialized Solutions</title>
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
            <span class="SctnTtl Engnrng">Engineering</span>
            <div class="SctnInnerLnks">
                <ul class="InnrLnksHldr">
                <li>
                        <a href="<?php echo base_url(); ?>/engineering" class="LnkTxt Icn EnggWtr">Water</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/engineeringEnergy" class="LnkTxt Icn EnggEnrgy">Energy</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/engineeringAirConditioning" class="LnkTxt Icn EnggArCndtng">Air Conditioning</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/engineeringAirQuality" class="LnkTxt Icn EnggArQlty">Air Quality</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/engineeringSoftIntegration" class="LnkTxt Icn EnggSftIntrgtn">Soft Integration</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/engineeringSpecializedSolutions" class="LnkTxt Icn EnggSpclSltn Actv">Specialized Solutions</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ContainerRight">
            <div class="SctnDtlsTtlHldr">
                <div class="BrcmnbHldr">
                    <ul class="DtlsBrdCrmb">
                        <li>
                            <a href="Engineering.html" class="BrdCrmLnk">All Engineering</a>
                        </li>
                        <li>
                            <span class="PgTtl">Specialized Solutions</span>
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
