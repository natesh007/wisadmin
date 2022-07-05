<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Alumni System | Guidance & Support That Can Make The Difference">
    <meta name="description" content="Discover this platform where juniors and seniors can interact with each other one-on-one and find some great resources for your career growth. Sign Up now and be a part of this network that really could do wonders for you. ">
    <link rel="icon" href="<?php echo base_url(); ?>/public/alumini-assets/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/alumini-assets/public/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e28431b1d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/student-assets/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/alumini-assets/public/css/animate.min.css">
    <title>UniMentor | Guidance & Support That Can Make The Difference</title>
    <!--<style>
        .form-group {
            flex-wrap: wrap;
        }
    </style>-->
</head>

<body class="pad0">
    
    <!-- EMAIL CONFIRM -->

    <div class="modal fade show" id="verify_signUp_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelvideo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content overflow-hidden">
                <div class="modal-header d-flex justify-content-end">
                    <a href="<?php echo base_url('reback');?>" style="color:#fff;font-size:24px;text-decoration:none;">&times;</a>
                </div>
                <div class="modal-body p-0">
                    <div class="d-flex flex-column justify-content-center align-items-center p-5">
                        <span class="icon icon-tick dark-green text-white mb-4 text-center square-48 rounded-circle d-flex justify-content-center align-items-center">
                            <img src="<?php echo base_url(); ?>/public/student-assets/images/email.svg" />
                        </span>
                        <h2 class="text-white mb-3">Verify your email address</h2>
                        <p class="font-18 font-500 text-center text-white mb-0">We have sent you an email to <b>(<?= base64_decode($mail) ?>) .</b> <?php /*and an SMS to (<?= '+' . session()->get('MobileNumber') ?>)</b> to validate your contact details*/?> After receiving the email<?php/*/ SMS*/?>, please confirm using the link provided to complete your sign up process.</p>
                    </div>
                    <div class="w-100 p-4 text-center bg-white footer-text">
                        Haven't received an email<!--/ SMS-->?
                        <b><a href="<?php echo base_url('withoutresendactive/'.$mail); ?>">Resend confirmation</a></b>
                        <?php if (session('rmsgs')) { ?>
                            <p class="d-block">
                                <span class="help-block"><?php echo  session('rmsgs'); ?></span>
                            </p>
                        <?php  } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>/public/alumini-assets/cdnjs/ajaxlib.js"></script>	 
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/alumini-assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/alumini-assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>/public/alumini-assets/js/animate.js" type="text/javascript"></script>

    <!-- AJAX CALL FOR REGISTER -->
    <script>
        $(document).ready(function(){
            $('#verify_signUp_pop').modal({
            backdrop: 'static',
            keyboard: false
            })
            $("#verify_signUp_pop").modal("show");
        });
    </script>

</body>

</html>