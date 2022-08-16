
    <div class="AppHeader">
        <div class="ContainerLeft">
            <div class="AppClientLogo">
                <img src="<?= session('Logo'); ?>" class="ClientLogo" />
            </div>
        </div>
        <div class="ContainerRight">
            <div class="AppUsrLnks">
                <ul class="PrflHdrLnk">
                    <li>
                        <div class="PrfHldr">
                            <img src="<?= session('ProfilePic') ?>" class="UserImg" />
                            <span class="UsrNme"><?= session('EmpName'); ?></span>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>/notifications" class="HdrIcoLnk Ntfctns Updts"></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/settings" class="HdrIcoLnk Sttngs"></a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>/logout" class="HdrIcoLnk Lgout"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>